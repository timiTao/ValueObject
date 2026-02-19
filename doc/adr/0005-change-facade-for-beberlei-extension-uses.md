# 5. Change façade for Beberlei extension uses

Date: 2020-02-02

## Status

Accepted

Supercedes [3. Use of Beberlei/assert library](0003-use-of-beberlei-assert-library.md)

## Context

For quick development, it is best to use battle-tested libraries. `Beberlei/assert` library is well known. The method of stopping by exception forces the use of a `try/catch` block. We also want to have the possibility to throw own exceptions in the domain, that do not require extending classes or implementing interfaces outside of domain project.

The original idea was to create two required abstract methods. This forces any extending code to provide two methods in façade style:
 * `abstract protected function guard(bool $value): void;` with `@throws Throwable if value is invalid`
 * `abstract protected function throwException(bool $value, Throwable $e): Exception;`
 
After a few attempts, overall DX is less enjoyable when using this library.
One of the examples is when you do not have any restriction, but `throwException` still forced you to implement it.

## Decision

Force to have only one method:
* `abstract protected function guard(bool $value): void;` with `@throws Exception if value is invalid`
and rearrange construction for all `__construct` methods.

## Consequences

This should create more enjoyable DX.
