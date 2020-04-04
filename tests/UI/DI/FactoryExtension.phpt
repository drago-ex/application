<?php

declare(strict_types = 1);

use Drago\Application\UI\Factory;
use Nette\DI;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class FactoryExtension extends TestContainer
{
	private function createContainer(): DI\Container
	{
		$loader = new DI\ContainerLoader(TEMP_DIR, true);
		$class = $loader->load(function (DI\Compiler $compiler): void {
			$compiler->addExtension('factory', new Drago\Application\UI\DI\FactoryExtension);
		});
		return new $class;
	}


	public function test01(): void
	{
		$container = $this->createContainer();
		Assert::type(Factory::class, $container->getByType(Factory::class));
	}
}

$extension = new FactoryExtension($container);
$extension->run();
