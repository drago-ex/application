<?php

declare(strict_types = 1);

/**
 * Drago Application
 * Package built on Nette Framework
 */
namespace Drago\Application\UI;

use Nette\Application\UI;


/**
 * Creating factories.
 * @package Drago\Application
 */
trait Factory
{
	public function createForm(): UI\Form
	{
		return new UI\Form;
	}
}
