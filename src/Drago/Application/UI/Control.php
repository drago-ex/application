<?php

declare(strict_types = 1);

/**
 * Drago Application
 * Package built on Nette Framework
 */
namespace Drago\Application\UI;

use Nette\Application\UI;
use stdClass;

/**
 * Base control.
 * @package Drago\Application
 */
class Control extends UI\Control
{
	/**
	 * Is AJAX request?
	 */
	public function isAjax(): bool
	{
		return $this->presenter->isAjax();
	}


	/**
	 * Returns pair signal receiver and name.
	 */
	public function getSignal(): ?array
	{
		return $this->presenter->getSignal();
	}
}
