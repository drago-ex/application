# Drago Application

The Drago Extension is a package built on top of the Nette Framework, designed to provide several useful
components for your web applications. Below are the classes in the extension and how you can use them.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/application/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![Tests](https://github.com/drago-ex/application/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/application/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Composer
- Bootstrap
- Naja

## Installation

```
composer require drago-ex/application
```

## Project files

File copying is handled automatically by [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
which must be installed in your project. Without it, copy the files manually according to the `copy` section
in this package's `composer.json`. To skip this package, set `"skip": true` under
`extra.drago-tools.packages.<package-name>` in your root `composer.json`.

## ExtraControl

Extend `Drago\Application\UI\ExtraControl` instead of `Nette\Application\UI\Control`.

### Signal check

`getSignal()` returns `true` when the current request is the given signal (default `edit`) sent to this control:

```php
if ($this->getSignal()) {
	// edit mode of this control
}

if ($this->getSignal('delete')) {
	// ...
}
```

### AJAX request

Shortcut for the presenter check:
```php
$this->isAjax();
```

### Presenter helpers

These methods call the corresponding presenter method, so they are useful when an action should affect the whole page rather than only the control.

```php
$this->addRedirect('Homepage:default'); // Redirects the presenter.
$this->addRedraw('content'); // Marks a presenter snippet for redraw (null redraws all snippets).
$this->addFlashMessage('Changes saved.', 'success'); // Adds a presenter flash message.
$this->setPayload('close', 'close'); // Sets a value in the presenter payload.
```

`translate()` is a protected helper for formatting messages. Set the public `$translator` property to use a translator; without one, it returns the message as-is or formats its parameters with `vsprintf()`.

```php
$label = $this->translate('Hello %s', $name);
```

### Form component by name

Returns the form control, or `null` when the component is not a form control (for example a container):

```php
$form = $this['factory'];
$submitButton = $this->getFormComponent($form, 'submit');
$submitButton->setCaption('Edit');
```

## Form Factory

Use `Drago\Application\UI\Factory` when you want a typed factory for another form class, for example `ExtraForms` from `drago-ex/form`.

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

A base template class with the variables Nette passes to every template (`$presenter`, `$control`, `$user`, `$baseUrl`, `$basePath`, `$flashes`).

Use it in presenter or control PHPDoc:
```php
/**
 * @property-read Drago\Application\UI\ExtraTemplate $template
 */
class Presenter {}
```

In Latte, we will use these macros to insert into the template, which will tell us the
variables and types that can be used by default in the template.
```latte
{templateType Drago\Application\UI\ExtraTemplate}
{varType Drago\Application\UI\Flashes[] $flashes}

{include 'path/to/@flash-message.latte', flashes: $flashes}
```

## Flash message alert types

[`Drago\Application\UI\Alert`](https://github.com/drago-ex/application/blob/main/src/Application/UI/Alert.php) defines `Success`, `Danger`, `Warning` and `Info`:

```php
$this->flashMessage('Saved.', Alert::Success);
```

## Toast - Bootstrap and Naja component for flash messages

## JavaScript setup

Since the package is installed via Composer, add the following to your `package.json`:
```json
{
  "type": "module",
  "dependencies": {
    "drago-application": "file:vendor/drago-ex/application"
  }
}
```
Then run `npm install`.

```javascript
import naja from 'naja';
import { ToastHandler } from 'drago-application';

naja.registerExtension(new ToastHandler());
```

Each toast is shown once, including toasts added by AJAX snippets, and removed after it hides.

## Using toast in a Latte template

```latte
{include 'path/to/@toast.latte', flashes: $flashes}
```

## Table widget

`@table.latte` renders a Bootstrap table. Pass an optional id, caption and themes for the table body and head
(`primary`, `secondary`, `success`, `danger`, `warning`, `info`; unknown values use no theme):

```latte
{embed 'path/to/@table.latte', tableId: 'users', caption: 'Users', options: [head: 'primary']}
	{block thead}<tr><th>Name</th></tr>{/block}
	{block body}
		<tr n:foreach="$users as $user"><td>{$user->name}</td></tr>
	{/block}
{/embed}
```
