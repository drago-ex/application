<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Application\UI\DI;

use Drago\Application\UI\Factory;
use Nette\DI\CompilerExtension;


/**
 * Register service.
 */
class FactoryExtension extends CompilerExtension
{
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('factory'))
			->setFactory(Factory::class);
	}
}
