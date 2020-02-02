# 5. Change façade for Beberlei extension uses

Date: 2020-02-02

## Status

Accepted

Supercedes [3. Use of Beberlei/assert library](0003-use-of-beberlei-assert-library.md)

## Context

For quick develop, it is best to move with battle-tested libraries. `Beberlei/assert` library is well known. The method of stopping by exception force to use `try/catch` block. We want also to have the possibility to throw own exceptions in the domain, that doesn't need to extend class or implements interfaces outside of domain project.

Original idea was for create required two abstract function. This force any extending code with 2 method in façade style:
 * `abstract protected function guard(bool $value): void;` with `@throws Throwable if value is invalid`
 * `abstract protected function throwException(bool $value, Throwable $e): Exception;`
 
After a few attempts, overall DX is less enjoyable in use this library. 
One of the examples is when you did not have any restriction, but `throwException` forced you to implement it.

## Decision

Force to have only one function:
* `abstract protected function guard(bool $value): void;` with `@throws Exception if value is invalid`
and rearrange construction for all `__construct` functions.

## Consequences

This should create more enjoyable DX.
