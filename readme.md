## Drago Application

Basic methods for the presenter and components.

## Requirements

- PHP 7.1 or higher
- composer

## Installation

```
composer require drago-ex/application
```

## An example of how to use a factory

Use Trait in the Class where you want to use the factory.

```php
use Drago\Application\UI\Factory;

// Create factory
$form = $this->factory->create();
return $form;
```
