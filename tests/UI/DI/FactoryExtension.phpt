<?php

declare(strict_types = 1);

namespace Test\DI;

use Drago;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;
use Tests\TestContainer;

$container = require __DIR__ . '/../../bootstrap.php';


class FactoryExtension extends TestContainer
{
	private function createContainer(): Container
	{
		$loader = new ContainerLoader(TEMP_DIR, true);
		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->addExtension('factory', new Drago\Application\UI\DI\FactoryExtension);
		});
		return new $class;
	}


	public function test01(): void
	{
		$container = $this->createContainer();
		$factory = Drago\Application\UI\Factory::class;
		Assert::type(Drago\Application\UI\Factory::class, $container->getByType($factory));
	}
}

$extension = new FactoryExtension($container);
$extension->run();
