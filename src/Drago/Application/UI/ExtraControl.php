<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Forms\Controls\BaseControl;
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


	/**
	 * Returns a fully-qualified name that uniquely identifies the component within the presenter hierarchy.
	 */
	public function getUniqueIdComponent(string $name): string
	{
		return $this->getUniqueId() . $name;
	}
}
