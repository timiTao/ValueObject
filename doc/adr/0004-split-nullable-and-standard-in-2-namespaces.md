# 4. Split nullable and standard in 2 namespaces

Date: 2020-02-01

## Status

Accepted

Supercedes [2. Strict code style](0002-strict-code-style.md)

## Context

In PHP version 7.1, it was introduced the possibility to fully cover standard types as arguments and return type. The problem with using `null` is that the person using the interface know if null is a possible outcome. Regardless of that, they need to check if the got value is correct or null. I prefer, more defence situation. When for ValueObject we get correct value or exception.

## Decision

Split namespaces for:
 
 * `Standard` ( **required** ) - always declare one RT
 * `Nullable` ( **optional** ) - declare one RT or `null`


## Consequences

This will create more interfaces and implementation but will provide simpler interfaces.
