<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Application\UI;

/**
 * This factory is designed for creating forms.
 * @author Zdeněk Papučík
 */
class Forms
{
	use Nette\SmartObject;

	/**
	 * Form factory.
	 * @param  Translator
	 * @return Form
	 */
	public function create($translator = NULL)
	{
		return (new UI\Form())->setTranslator($translator);
	}

}
