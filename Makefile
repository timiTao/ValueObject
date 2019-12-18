#!/usr/bin/env make

ifndef PHP
	PHP_VERSION=7.1.0
endif

-include .env
export

default: bash

### Define PHP

qa_image=jakzal/phpqa:1.25.0

dockerized=docker run --init -it --rm \
	-u $(shell id -u):$(shell id -g) \
	-v $(shell pwd):/app \
	-w /app
qa_tools=${dockerized} \
	-e COMPOSER_CACHE_DIR=/app/tmp/composer \
	${qa_image}

php_image=php:${PHP_VERSION}-alpine

php=${dockerized} \
	-e COMPOSER_CACHE_DIR=/app/tmp/var/composer \
	${php_image}

phpcs-psr1:
	${qa_tools} phpcs --standard=PSR1 ./src --ignore=*/spec/*

phpcs-psr2:
	${qa_tools} phpcs --standard=PSR2 ./src --ignore=*/spec/*

phpcbf-psr1:
	${qa_tools} phpcbf --standard=PSR1 ./src

phpcbf-psr2:
	${qa_tools} phpcbf --standard=PSR2 ./src

phpstan:
	${qa_tools} phpstan analyse ./src --level max

phpmd:
	${qa_tools} phpmd . text codesize,unusedcode --exclude vendor/,tmp/

ecs:
	${qa_tools} ecs check src --config ecs.yaml

ecs-fix:
	${qa_tools} ecs check src --config ecs.yaml --fix

code-analysis:
	@make phpcs-psr1
	@make phpcs-psr2
	@make phpstan
	@make ecs

code-fix:
	@make phpcbf-psr1
	@make phpcbf-psr2
	@make ecs-fix

composer-install:
	${qa_tools} composer install ${composer_args}

composer-update:
	${qa_tools} composer update ${composer_args}

composer-update-lowest:
	${qa_tools} composer update ${composer_args} --prefer-stable --prefer-lowest --ignore-platform-reqs