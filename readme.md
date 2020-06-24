<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago Extension</h3>
<p align="center">Extension for Nette Framework</p>

## Application
Basic extensions.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/application/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![Build Status](https://travis-ci.org/drago-ex/application.svg?branch=master)](https://travis-ci.org/drago-ex/application)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/application/badge)](https://www.codefactor.io/repository/github/drago-ex/application)

## Technology
- PHP 7.4 or higher
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
