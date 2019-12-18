# 2. Strict code style

Date: 2019-12-18

## Status

Accepted

## Context

In PHP version 7.1, it was introduced the possibility to fully cover standard types as arguments and return type. The problem with using `null` is that the person using the interface know if null is a possible outcome. Regardless of that, they need to check if the got value is correct or null. I prefer, more defence situation. When for ValueObject we get correct value or exception.

## Decision

You **MUST** declare one return type for each function.

## Consequences


Due to decision, the code is much more split over interfaces. Also, for the nullable object, we need to implement one extra function `isNull(): bool` over the standard implementation
