# 4. Split nullable and standard in 2 namespaces

Date: 2020-02-01

## Status

Accepted

Supercedes [2. Strict code style](0002-strict-code-style.md)

## Context

In PHP version 7.1, the possibility was introduced to fully cover standard types as arguments and return type. The problem with using `null` is that the person using the interface knows if null is a possible outcome. Regardless of that, they need to check if the value they got is correct or null. I prefer a more defensive situation. For a ValueObject we get correct value or exception.

This supersedes `2. Strict code style` due to unsatisfied results from a few implementation attempts. I couldn't create a cohesive interface that could balance business functions and simplicity.

## Decision

Split namespaces for:
 
 * `Standard` ( **required** ) - always declare one RT
 * `Nullable` ( **optional** ) - declare one RT or `null`


## Consequences

This will create more interfaces and implementation but will provide simpler interfaces.
