# 2. Strict code style

Date: 2019-12-18

## Status

Superseded by [4. Split nullable and standard in 2 namespaces](0004-split-nullable-and-standard-in-2-namespaces.md)

## Context

In PHP version 7.1, the possibility was introduced to fully cover standard types as arguments and return type. The problem with using `null` is that the person using the interface knows if null is a possible outcome. Regardless of that, they need to check if the value they got is correct or null. I prefer a more defensive situation. For a ValueObject we get correct value or exception.

## Decision

You **MUST** declare one return type for each method.

## Consequences

Due to decision, the code is much more split over interfaces. Also, for the nullable object, we need to implement one extra method `isNull(): bool` over the standard implementation
