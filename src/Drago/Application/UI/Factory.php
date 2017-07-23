<?php

/**
 * Extending for Nette Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Application\UI;

/**
 * This factory is designed for creating forms.
 * @author Zdeněk Papučík
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
