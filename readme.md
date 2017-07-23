## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fb5139b3536247539dad485b2ca12361)](https://www.codacy.com/app/accgit/application?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/application&utm_campaign=badger)

Basic methods.

## Pre-written flash message with type

```php
// Seccess message.
$this->messageSuccess('Success message');
```

```php
// Warning message.
$this->messageWarning('Warning message');
```

```php
// Info message.
$this->messageInfo('Info message');
```

## Form factory

Add the configuration file:

```
services:

	# Form factory.
	- Drago\Application\UI\Factory
```

## Usage

```php
$form = $this->factory->create();
```
