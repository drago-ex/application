<?php

declare(strict_types = 1);

use Drago\Application\UI\DI\FactoryExtension;
use Drago\Application\UI\Factory;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class TestFactoryExtension extends TestContainer
{
	private function createContainer(): Container
	{
		$loader = new ContainerLoader(TEMP_DIR, true);
		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->addExtension('factory', new FactoryExtension());
		});
		return new $class;
	}


	public function test01(): void
	{
		$container = $this->createContainer();
		Assert::type(Factory::class, $container->getByType(Factory::class));
	}
}

$extension = new TestFactoryExtension($container);
$extension->run();
