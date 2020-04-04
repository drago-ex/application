<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Application\UI\DI;

use Drago;
use Nette;


/**
 * Register service.
 */
class FactoryExtension extends Nette\DI\CompilerExtension
{
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('factory'))
			->setFactory(Drago\Application\UI\Factory::class);
	}
}
