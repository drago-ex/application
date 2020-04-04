<?php

declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

$class = new Drago\Application\UI\Factory;
Tester\Assert::type($class->create(), new Nette\Application\UI\Form);
