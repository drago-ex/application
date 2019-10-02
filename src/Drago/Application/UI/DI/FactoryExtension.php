<?php

declare(strict_types = 1);

/**
 * Drago Application
 * Package built on Nette Framework
 */
namespace Drago\Application\UI;

use Nette\DI\CompilerExtension;


/**
 * Register service.
 */
class FactoryExtension extends CompilerExtension
{
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('Factory'))
			->setFactory(Factory::class);
	}
}
