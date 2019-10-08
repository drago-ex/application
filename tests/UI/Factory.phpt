<?php

declare(strict_types = 1);

namespace Test\UI;

use Drago;
use Nette\Application\UI\Form;
use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../bootstrap.php';


class Factory extends TestCaseAbstract
{
	public function test01(): void
	{
		$class = $this->container->getByType(Drago\Application\UI\Factory::class);
		Assert::type(Form::class, $class->create());
	}
}

$class = new Factory($container);
$class->run();
