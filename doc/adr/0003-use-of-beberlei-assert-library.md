# 3. Use of Beberlei/assert library

Date: 2019-12-26

## Status

Superseded by [5. Change facade for Beberlei extension uses](0005-change-facade-for-beberlei-extension-uses.md)

## Context

For quick development, it is best to use battle-tested libraries. `Beberlei/assert` library is well known. The method of stopping by exception forces the use of a `try/catch` block. We also want to have the possibility to throw own exceptions in the domain, that do not require extending classes or implementing interfaces outside of domain project.

## Decision

Create boilerplate abstract classes for all standard types for `Core` interfaces.

## Consequences

To follow the DRY rule, there was created abstract classes with boilerplate code. This forces any extending code to provide two methods in façade style:
* `abstract protected function guard(bool $value): void;` with `@throws Throwable if value is invalid`
* `abstract protected function throwException(bool $value, Throwable $e): Exception;`
