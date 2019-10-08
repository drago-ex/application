<?php

declare(strict_types = 1);

namespace Test\DI;

use Drago;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class FactoryExtension extends TestCaseAbstract
{
	private function createContainer(): Container
	{
		$params = $this->container->getParameters();
		$loader = new ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->addExtension('factory', new Drago\Application\UI\DI\FactoryExtension);
		});
		return new $class;
	}


	public function test01(): void
	{
		$container = $this->createContainer();
		Assert::type(Drago\Application\UI\Factory::class, $container->getByType(Drago\Application\UI\Factory::class));
	}
}

$extension = new FactoryExtension($container);
$extension->run();
