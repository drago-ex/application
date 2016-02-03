<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\Factory;

use Nette;
use Nette\Application\UI\Form;

/**
 * This factory is designed for creating forms.
 * @author Zdeněk Papučík
 */
class Forms extends Nette\Object
{
	/**
	 * Form factory.
	 * @param  class
	 * @return Form
	 */
	public function create($translator = NULL)
	{
		return (new Form())->setTranslator($translator);
	}

}
