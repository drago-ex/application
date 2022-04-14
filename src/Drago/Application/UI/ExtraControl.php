<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Localization\Translator;


/**
 * Extra control.
 */
class ExtraControl extends Control
{
	public ?Translator $translator = null;


	/**
	 * Check if there is a pair signal receiver and name.
	 */
	public function getSignal(): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array('edit', $signal, true)) ? 1 : null;
	}


	/**
	 * Is AJAX request?
	 */
	public function isAjax(): bool
	{
		return $this->getPresenter()->isAjax();
	}
}
