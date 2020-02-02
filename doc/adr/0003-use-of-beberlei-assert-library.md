# 3. Use of Beberlei/assert library

Date: 2019-12-26

## Status

Superceded by [5. Change fascade for Beberlei extension uses](0005-change-fascade-for-beberlei-extension-uses.md)

## Context

For quick develop, it is best to move with battle-tested libraries. `Beberlei/assert` library is well known. The method of stopping by exception force to use `try/catch` block. We want also have the possibility to throw own exceptions in the domain, that doesn't need to extend class or implements interfaces outside of domain project.

## Decision

Create boilerplate abstract classes for all standard types for `Core` interfaces.

## Consequences

To follow the DRY rule, there was created abstract classes with boilerplate code. This force any extending code with 2 method in façade style:
* `abstract protected function guard(bool $value): void;` with `@throws Throwable if value is invalid`
* `abstract protected function throwException(bool $value, Throwable $e): Exception;`
