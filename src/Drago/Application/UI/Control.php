<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Application\UI;

use Nette;


class Control extends Nette\Application\UI\Control
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
