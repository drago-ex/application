<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette\Application\UI;

/**
 * Creating factories.
 */
trait Factory
{
	/**
	 * @return Application\UI\Form
	 */
	public function create()
	{
		return new UI\Form;
	}

}
