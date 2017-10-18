<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Application\UI;

/**
 * Form factory.
 */
class Factory
{
	use Nette\SmartObject;

	/**
	 * @return UI\Form
	 */
	public function create()
	{
		return new UI\Form;
	}

}
