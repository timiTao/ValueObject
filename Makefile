#!/usr/bin/env make

-include .env
export

default: bash

### Define PHP

qa_image=jakzal/phpqa:1.60.1

dockerized=docker run --init -it --rm \
	-u $(shell id -u):$(shell id -g) \
	-v $(shell pwd):/app \
	-w /app
qa_tools=${dockerized} \
	-e COMPOSER_CACHE_DIR=/app/tmp/composer \
	${qa_image}

phpcs-psr1:
	${qa_tools} phpcs --standard=PSR1 ./packages --ignore=*/spec/*

phpcs-psr2:
	${qa_tools} phpcs --standard=PSR2 ./packages --ignore=*/spec/*

phpcbf-psr1:
	${qa_tools} phpcbf --standard=PSR1 ./packages

phpcbf-psr2:
	${qa_tools} phpcbf --standard=PSR2 ./packages

phpstan:
	${qa_tools} phpstan analyse ./packages --level max

phpmd:
	${qa_tools} phpmd . text codesize,unusedcode --exclude vendor/,tmp/

code-analysis:
	@make phpcs-psr1
	@make phpcs-psr2
	@make phpstan

code-fix:
	@make phpcbf-psr1
	@make phpcbf-psr2

php-mono-validate:
	${php} vendor/bin/monorepo-builder validate

php-mono-merge:
	${php} vendor/bin/monorepo-builder merge

composer-install:
	${qa_tools} composer install ${composer_args}

composer-update:
	${qa_tools} composer update ${composer_args}

composer-update-lowest:
	${qa_tools} composer update ${composer_args} --prefer-stable --prefer-lowest --ignore-platform-reqs