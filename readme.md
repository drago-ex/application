## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fb5139b3536247539dad485b2ca12361)](https://www.codacy.com/app/accgit/application?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/application&utm_campaign=badger)

Základní metody.

## Předpřipravené flash messages

```php
// Zpráva, která se šabloně předá jako success.
$this->flashMessageSuccess();
```

```php
// Zpráva, která se šabloně předá jako info.
$this->flashMessageInfo();
```

```php
// Zpráva, která se šabloně předá jako warning.
$this->flashMessageWarning();
```

## Registrace služby pro vytváření formulářů

```
services:

	# Továrnička pro vytváření formulářů.
	- Drago\Application\UI\Factory
```

## Továrničku pak použijeme následovně

```php
$form = $this->factory->create();
```
