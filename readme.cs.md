## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fb5139b3536247539dad485b2ca12361)](https://www.codacy.com/app/accgit/application?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/application&utm_campaign=badger)

Základní metody pro presentery a komponenty.

## Požadavky

- PHP 7.0.8 nebo vyšší
- composer

## Instalace

```
composer require drago-ex/application
```

## Jak začít

Níže uvedenou traitu vložíme do base presenteru.

```php
use Drago\Application\UI\Drago;
```

## Zprávy s přednastaveným typem

```php
// Zpráva s přednastaveným typem success.
$this->flashMessageSuccess('success...');
```

```php
// Zpráva s přednastaveným typem info.
$this->flashMessageInfo('info...');
```

```php
// Zpráva s přednastaveným typem warning.
$this->flashMessageWarning('warning...');
```

## Registrace služby pro vytváření formulářů

```
services:

	# Továrnička pro formuláře.
	- Drago\Application\UI\Factory
```

## Ukázka, jak používat továrničku

```php
$form = $this->factory->create();
```
