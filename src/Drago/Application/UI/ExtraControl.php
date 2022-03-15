<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\InvalidStateException;
use Nette\Localization\Translator;


/**
 * Extra control.
 */
class ExtraControl extends Control
{
	public ?Translator $translator = null;
	public Template $template;


	public function setTranslator(Translator $translator): Translator
	{
		return $this->translator = $translator;
	}


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


	/**
	 * Forces control or its snippet to repaint.
	 */
	public function redrawPresenter(string $snippet = null, bool $redraw = true): void
	{
		$this->presenter->redrawControl($snippet, $redraw);
	}


	/**
	 * Multiple redraw snippet on presenter.
	 */
	public function multipleRedrawPresenter(array $snippets): void
	{
		foreach ($snippets as $snippet) {
			$this->redrawPresenter($snippet);
		}
	}


	/**
	 * Saves the message to template, that can be displayed after redirect.
	 */
	public function flashMessagePresenter($message, string $type = 'info'): \stdClass
	{
		return $this->presenter->flashMessage($message, $type);
	}


	/**
	 * Template render.
	 */
	public function setRenderControl(string $templateFile, ?array $items = []): void
	{
		if ($this->template instanceof Template) {
			$template = $this->template;

			if (is_array($items)) {
				foreach ($items as $key => $item) {
					$template->$key = $item;
				}
			}

			if ($this->translator instanceof Translator) {
				$template->setTranslator($this->translator);
			}

			$template->setFile($templateFile);
			$template->render();

		} else {
			throw new InvalidStateException('Incorrect instance type.');
		}
	}


	/**
	 * Creating a factory.
	 */
	public function factory(): Form
	{
		$form = new Form;
		if ($this->translator instanceof Translator) {
			$form->setTranslator($this->translator);
		}
		return $form;
	}
}
