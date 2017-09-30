## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fb5139b3536247539dad485b2ca12361)](https://www.codacy.com/app/accgit/application?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/application&utm_campaign=badger)

Základní metody pro presentery.

## Vložení traity do presenteru

```php
use Drago\Application\UI\Drago;
```

## Zprávy s přednastaveným typem

```php
// Zpráva, která se šabloně předá jako success.
$this->flashMessageSuccess('success...');
```

```php
// Zpráva, která se šabloně předá jako info.
$this->flashMessageInfo('info...');
```

```php
// Zpráva, která se šabloně předá jako warning.
$this->flashMessageWarning('warning...');
```

## Registrace služby pro vytváření formulářů

```
services:

	# Továrnička pro vytváření formulářů.
	- Drago\Application\UI\Factory
```

## Ukázka, jak používat továrničku

```php
$form = $this->factory->create();
```
