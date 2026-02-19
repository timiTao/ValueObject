[![License](https://poser.pugx.org/timitao/value-object/license.svg)](https://packagist.org/packages/timitao/value-object)
[![Latest Stable Version](https://poser.pugx.org/timitao/value-object/v/stable.svg)](https://packagist.org/packages/timitao/value-object)
[![Total Downloads](https://poser.pugx.org/timitao/value-object/downloads.svg)](https://packagist.org/packages/timitao/value-object)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/timiTao/ValueObject/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/timiTao/ValueObject/?branch=master)

## Why

This library provides **typed Value Objects** in the spirit of Domain-Driven Design: immutable, compared by value and by type. It keeps **contracts** (interfaces) separate from **implementations**, offers both **Required** (non-null) and **Nullable** variants, and has **no framework dependency**—you can depend only on the contract package or use the default implementations.

## Installation

```bash
composer require timitao/value-object
```

## Usage

Extend one of the standard value object classes and use `equals()` for type-safe value comparison (same concrete class and same value):

```php
use TimiTao\ValueObject\Standard\Required\AbstractClass\ValueObject\StringValueObject;

final class Title extends StringValueObject {}

$a = new Title('Hello');
$b = new Title('Hello');
$c = new Title('World');

$a->equals($b); // true — same class, same value
$a->equals($c); // false — same class, different value
```

## Architecture decision records

1. [Record architecture decisions](/doc/adr/0001-record-architecture-decisions.md)
2. [Strict code style](/doc/adr/0002-strict-code-style.md)
3. [Use of Beberlei/assert library](/doc/adr/0003-use-of-beberlei-assert-library.md)
4. [Split nullable and standard in 2 namespaces](/doc/adr/0004-split-nullable-and-standard-in-2-namespaces.md)
5. [Change facade for Beberlei extension uses](/doc/adr/0005-change-facade-for-beberlei-extension-uses.md)

## Versioning
 
Staring version ``1.0.0``, will follow [Semantic Versioning v2.0.0](http://semver.org/spec/v2.0.0.html).

## Contributors

* Tomasz Kunicki [TimiTao](http://github.com/timiTao) [lead developer]