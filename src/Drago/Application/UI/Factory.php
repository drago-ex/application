<?php

declare(strict_types = 1);

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
	public function createForm(): UI\Form
	{
		return new UI\Form;
	}
}
