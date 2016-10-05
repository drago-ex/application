<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Application\UI\Form;

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
		return (new Form())->setTranslator($translator);
	}

}
