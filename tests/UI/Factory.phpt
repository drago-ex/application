<?php

declare(strict_types = 1);

use Drago\Application\UI\Factory;
use Nette\Application\UI\Form;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$class = new Factory;
Assert::type($class->create(), new Form);
