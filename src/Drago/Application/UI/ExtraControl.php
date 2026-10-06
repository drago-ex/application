<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\AbortException;
use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Forms\Controls\BaseControl;
use Nette\Localization\Translator;
use function vsprintf;


/**
 * Adds concise helpers for presenter-level actions alongside Control's local methods.
 */
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


	/**
	 * Translates a message, formatting its parameters when no translator is configured.
	 */
	protected function translate(string $message, string|int ...$parameters): string
	{
		if ($this->translator !== null) {
			return (string) $this->translator->translate($message, ...$parameters);
		}

		return $parameters === [] ? $message : vsprintf($message, $parameters);
	}


	/** Adds a flash message to the presenter rather than this control. */
	public function addFlashMessage(string|\stdClass|\Stringable $message, string $type = 'info'): \stdClass
	{
		return $this->getPresenter()->flashMessage($message, $type);
	}


	/** Marks a presenter snippet for redraw rather than a snippet in this control. */
	public function addRedraw(?string $snippet = null, bool $redraw = true): void
	{
		$this->getPresenter()->redrawControl($snippet, $redraw);
	}


	/**
	 * Redirects the presenter and forwards the same arguments as Nette's redirect().
	 *
	 * @throws AbortException
	 */
	public function addRedirect(string $destination, mixed ...$args): void
	{
		$this->getPresenter()->redirect($destination, ...$args);
	}


	public function getFormComponent(Form $form, string $component): ?BaseControl
	{
		$factory = $form[$component];
		return $factory instanceof BaseControl ? $factory : null;
	}
}
