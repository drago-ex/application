<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\InvalidStateException;
use Nette\Localization\Translator;


/**
 * Extra control.
 */
class ExtraControl extends Control
{
	public ?Translator $translator = null;

	/** Path to the template */
	protected string $templateFile;


	/**
	 * Translator adapter.
	 */
	public function setTranslator(Translator $translator): Translator
	{
		return $this->translator = $translator;
	}


	/**
	 * Check if there is a pair signal receiver and name.
	 */
	public function getSignal(): ?int
	{
		$signal = $this->getPresenter()->getSignal();
		return $signal && (in_array('edit', $signal, true)) ? 1 : null;
	}


	/**
	 * Template render.
	 */
	public function setRender(string $templateFile, array $items = []): void
	{
		$template = $this->getTemplate();
		if ($template instanceof Template) {
			if (is_array($items)) {
				foreach ($items as $key => $item) {
					$template->{$key} = $item;
				}
			}
			$template->setTranslator($this->translator);
			$template->setFile($templateFile);
			$template->render();

		} else {
			throw new InvalidStateException('Incorrect instance type.');
		}
	}
}
