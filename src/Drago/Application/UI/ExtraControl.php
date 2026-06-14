<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Forms\Controls\BaseControl;
use Nette\Localization\Translator;


abstract class ExtraControl extends Control
{
	public ?Translator $translator = null;


	public function getSignal(string $name = 'edit'): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array($name, $signal, true)) ? 1 : null;
	}


	public function isAjax(): bool
	{
		return $this->getPresenter()->isAjax();
	}


	public function getFormComponent(Form $form, string $component): ?BaseControl
	{
		$factory = $form[$component];
		return $factory instanceof BaseControl ? $factory : null;
	}
}
