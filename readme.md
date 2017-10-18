## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fb5139b3536247539dad485b2ca12361)](https://www.codacy.com/app/accgit/application?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/application&utm_campaign=badger)

Basic methods for the presenter and components.

## Requirements

- PHP 7.0.8 or higher
- composer

## Installation

```
composer require drago-ex/application
```

## How to begin

Put the trait below into the presenter base.

```php
use Drago\Application\UI\Drago;
```

## Flash messages with a preset type

```php
// Flash message with success type.
$this->flashMessageSuccess('success...');
```

```php
// Flash message with type info.
$this->flashMessageInfo('info...');
```

```php
// Flash message with warning type.
$this->flashMessageWarning('warning...');
```

## Register a form creation service

```
services:

	# Form factory.
	- Drago\Application\UI\Factory
```

## An example of how to use a factory

```php
$form = $this->factory->create();
```
