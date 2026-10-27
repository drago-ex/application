# Drago Application

Drago Extension je balíček postavený na Nette Frameworku, který přináší několik užitečných
komponent pro webové aplikace. Níže jsou popsané třídy rozšíření a jejich použití.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/application/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![Tests](https://github.com/drago-ex/application/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/application/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Composer
- Bootstrap
- Naja

## Instalace

```
composer require drago-ex/application
```

## Soubory kopírované do projektu

Soubory do projektu kopíruje [drago-ex/project-tools](https://github.com/drago-ex/project-tools)
podle nastavení v `extra.drago-tools` v `composer.json` tohoto balíčku.

## ExtraControl

Místo `Nette\Application\UI\Control` děďte z `Drago\Application\UI\ExtraControl`.

### AJAXový požadavek

Zkratka pro kontrolu na presenteru:
```php
$this->isAjax();
```

### Pomocníci presenteru

Tyto metody volají odpovídající metodu presenteru, takže se hodí, když má akce ovlivnit celou stránku, a ne jen komponentu.

```php
$this->addRedirect('Homepage:default'); // Redirects the presenter.
$this->addRedraw('content'); // Marks a presenter snippet for redraw (null redraws all snippets).
$this->addFlashMessage('Changes saved.', 'success'); // Adds a presenter flash message.
```

`translate()` je chráněný pomocník pro formátování zpráv. Pro použití překladače nastavte veřejnou vlastnost `$translator`; bez něj vrátí zprávu beze změny, případně dosadí parametry přes `vsprintf()`.

```php
$label = $this->translate('Hello %s', $name);
```

### Formulářový prvek podle názvu

Vrátí ovládací prvek formuláře, nebo `null`, když komponenta ovládacím prvkem není (například kontejner):

```php
$form = $this['factory'];
$submitButton = $this->getFormComponent($form, 'submit');
$submitButton->setCaption('Edit');
```

## Továrna formulářů

`Drago\Application\UI\Factory` použijte, když chcete typovanou továrnu pro jinou třídu formuláře, například `ExtraForms` z `drago-ex/form`.

```php
use Drago\Form\ExtraForms;

/**
 * @extends \Drago\Application\UI\Factory<ExtraForms>
 */
readonly class Factory extends \Drago\Application\UI\Factory
{
	protected function createForm(): ExtraForms
	{
		return new ExtraForms;
	}
}
```

## ExtraTemplate

Základní třída šablony s proměnnými, které Nette předává do každé šablony (`$presenter`, `$control`, `$user`, `$baseUrl`, `$basePath`, `$flashes`).

Použijte ji v PHPDoc presenteru nebo komponenty:
```php
/**
 * @property-read Drago\Application\UI\ExtraTemplate $template
 */
class Presenter {}
```

V Latte tyto značky řeknou, jaké proměnné a typy lze v šabloně ve výchozím stavu používat:
```latte
{templateType Drago\Application\UI\ExtraTemplate}
{varType Drago\Application\UI\Flashes[] $flashes}

{include 'path/to/@flash-message.latte', flashes: $flashes}
```

## Typy flash zpráv

[`Drago\Application\UI\Alert`](https://github.com/drago-ex/application/blob/main/src/Application/UI/Alert.php) definuje `Success`, `Danger`, `Warning` a `Info`:

```php
$this->flashMessage('Saved.', Alert::Success);
```

## Toast - komponenta Bootstrapu a Naja pro flash zprávy

### Nastavení JavaScriptu

Balíček se instaluje přes Composer, proto přidejte do `package.json` následující:
```json
{
  "type": "module",
  "dependencies": {
    "drago-application": "file:vendor/drago-ex/application"
  }
}
```
Potom spusťte `npm install`.

```javascript
import naja from 'naja';
import { ToastHandler } from 'drago-application';

naja.registerExtension(new ToastHandler());
```

Každý toast se zobrazí jen jednou, včetně toastů přidaných AJAXovými snippety, a po skrytí se odstraní.

### Toast v šabloně Latte

```latte
{include 'path/to/@toast.latte', flashes: $flashes}
```

## Widget tabulky

`@table.latte` vykreslí tabulku Bootstrapu. Volitelně předejte id, popisek a motivy těla a hlavičky tabulky
(`primary`, `secondary`, `success`, `danger`, `warning`, `info`; neznámé hodnoty motiv nepoužijí):

```latte
{embed 'path/to/@table.latte', tableId: 'users', caption: 'Users', options: [head: 'primary']}
	{block thead}<tr><th>Name</th></tr>{/block}
	{block body}
		<tr n:foreach="$users as $user"><td>{$user->name}</td></tr>
	{/block}
{/embed}
```
