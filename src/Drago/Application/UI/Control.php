<?php declare(strict_types = 1);

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette\Application\UI;
use stdClass;

/**
 * Base control.
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


	/**
	 * Saves the message to template.
	 */
	public function flashMessage($message, string $type = 'info'): stdClass
	{
		parent::flashMessage($message, $type);
		return $this->presenter->flashMessage($message, $type);
	}
}
