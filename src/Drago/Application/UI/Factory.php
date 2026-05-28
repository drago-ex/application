<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Form;
use Nette\Localization\Translator;
use Nette\Security\User;


abstract readonly class Factory
{
	public function __construct(
		private Translator $translator,
		private User $user,
	) {
	}


	abstract protected function createForm(): Form;


	public function create(): Form
	{
		$form = new Form;
		if ($this->user->isLoggedIn()) {
			$form->addProtection();
		}

		$form->setTranslator($this->translator);
		return $form;
	}
}
