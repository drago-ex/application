<?php

declare(strict_types = 1);

namespace Test\UI;

use Drago;
use Nette\Application\UI\Form;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


$class = new Drago\Application\UI\Factory;
Assert::type($class->create(), new Form);
