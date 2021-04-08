<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;


/**
 * Extra control.
 */
class ExtraControl extends Control
{
	/**
	 * Check if there is a pair signal receiver and name.
	 */
	public function getSignal(): ?int
	{
		$signal = $this->presenter->getSignal();
		return $signal && (in_array('edit', $signal, true)) ? 1 : null;
	}


	/**
	 * Is AJAX request?
	 */
	public function isAjax(): bool
	{
		return $this->presenter->isAjax();
	}
}
