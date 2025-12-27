## Drago Application
The Drago Extension is a package built on top of the Nette Framework, designed to provide several useful
components for your web applications. Below are the classes in the extension and how you can use them.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/application/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![Coding Style](https://github.com/drago-ex/application/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/application/badge)](https://www.codefactor.io/repository/github/drago-ex/application)

## Requirements
- PHP >= 8.3
- Nette Framework
- Composer
- Bootstrap
- Naja

## Installation
```
composer require drago-ex/application
```

## Check if there is a pair signal receiver and name (default is edit).
```php
$this->getSignal();
```

## Is AJAX request?
Shorter method in control.
```php
$this->isAjax();
```

## Retrieves a form component by its name.
```php
$form = $this['factory'];
$submitButton = $this->getFormComponent($form, 'submit');
$submitButton->setCaption('Edit');
```

## Base template class extending Nette Template.
It is used in the bow of presenters or control
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

<div n:foreach="$flashes as $flash" n:class="flash, $flash->type">{$flash->message}</div>
```

## Flash message alert type
- [Alert](https://github.com/drago-ex/application/blob/master/src/Drago/Application/UI/Alert.php)

## Toast - Bootstrap and naja component for flash messages
```JavaScript
import BootstrapComponents from 'path/to/naja.toast';
```

## Using toast in a latte template
```latte
 {include 'path/to/@toast.latte', flashes => $flashes}
```

Copy the Latte template from assets to your project.
