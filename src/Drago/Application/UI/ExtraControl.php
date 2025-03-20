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
 * Extra control providing basic functionality for form controls and AJAX handling.
 */
class ExtraControl extends Control
{
	/** @var Translator|null Translator object for localization. */
	public ?Translator $translator = null;


	/**
	 * Checks if there is a matching signal receiver and name.
	 *
	 * @param string $name The name of the signal to check for.
	 * @return int|null Returns 1 if a matching signal is found, otherwise null.
	 */
	public function getSignal(string $name = 'edit'): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array($name, $signal, true)) ? 1 : null;
	}


	/**
	 * Checks if the current request is an AJAX request.
	 *
	 * @return bool True if it's an AJAX request, false otherwise.
	 */
	public function isAjax(): bool
	{
		return $this->getPresenter()->isAjax();
	}


	/**
	 * Retrieves a form component by its name.
	 *
	 * @param Form $form The form instance to get the component from.
	 * @param string $component The name of the component to retrieve.
	 * @return BaseControl|null The form control component, or null if not found.
	 */
	public function getFormComponent(Form $form, string $component): ?BaseControl
	{
		$factory = $form[$component];
		return $factory instanceof BaseControl ? $factory : null;
	}
}
