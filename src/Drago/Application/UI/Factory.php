<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Form;
use Nette\Localization\Translator;
use Nette\Security\User;


/** @template T of Form */
abstract readonly class Factory
{
	public function __construct(
		private Translator $translator,
		private User $user,
	) {
	}


	/** @return T */
	abstract protected function createForm(): Form;


	/** @return T */
	public function create(): Form
	{
		$form = $this->createForm();
		if ($this->user->isLoggedIn()) {
			$form->addProtection();
		}

		$form->setTranslator($this->translator);
		return $form;
	}
}
