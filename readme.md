## Drago Application
Basic extensions.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/application/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![Coding Style](https://github.com/drago-ex/application/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/application/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/application/badge)](https://www.codefactor.io/repository/github/drago-ex/application)

## Technology
- PHP 8.0 or higher
- composer

## Installation
```
composer require drago-ex/application
```

## Extra Control

Check if there is a pair signal receiver and name.
```php
$this->getSignal();
```

## Is AJAX request?

Shorter method in control.
```php
$this->isAjax();
```

## Flash message alert type
- [Alert](https://github.com/drago-ex/application/blob/master/src/Drago/Application/UI/Alert.php)
