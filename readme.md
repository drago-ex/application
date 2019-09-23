<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago</h3>
<p align="center">Simple packages built on Nette Framework</p>

## Info

Basic methods for the presenter and components.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/application/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fapplication.svg)](https://badge.fury.io/ph/drago-ex%2Fapplication)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/application/badge)](https://www.codefactor.io/repository/github/drago-ex/application)

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
```
