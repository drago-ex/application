<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Forms\Controls\BaseControl;
use Nette\Localization\Translator;


/** Extra control providing basic functionality for form controls and AJAX handling. */
abstract class ExtraControl extends Control
{
	public ?Translator $translator = null;


	/** Checks if there is a matching signal receiver and name. */
	public function getSignal(string $name = 'edit'): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array($name, $signal, true)) ? 1 : null;
	}


	/** Checks if the current request is an AJAX request. */
	public function isAjax(): bool
	{
		return $this->getPresenter()->isAjax();
	}


	/** Retrieves a form component by its name. */
	public function getFormComponent(Form $form, string $component): ?BaseControl
	{
		$factory = $form[$component];
		return $factory instanceof BaseControl ? $factory : null;
	}
}
