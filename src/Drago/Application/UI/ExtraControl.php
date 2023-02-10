<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Localization\Translator;
use Nette\Forms\Controls\BaseControl;


/**
 * Extra control.
 */
class ExtraControl extends Control
{
	public ?Translator $translator = null;


	/**
	 * Check if there is a pair signal receiver and name.
	 */
	public function getSignal(string $name = 'edit'): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array($name, $signal, true)) ? 1 : null;
	}


	/**
	 * Is AJAX request?
	 */
	public function isAjax(): bool
	{
		return $this->getPresenter()->isAjax();
	}


	/**
	 * Implements the basic functionality common to form controls.
	 */
	public function getFormComponent(Form $form, string $component): ?BaseControl
	{
		$factory = null;
		$form = $form[$component];
		if ($form instanceof BaseControl) {
			$factory = $form;
		}
		return $factory;
	}
}
