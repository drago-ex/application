<?php

declare(strict_types = 1);

/**
 * Drago Application
 * Package built on Nette Framework
 */
namespace Drago\Application\UI;

use Nette\Application\UI\Form;
use Nette\SmartObject;


/**
 * Creating factories.
 * @package Drago\Application
 */
class Factory
{
	use SmartObject;

	public function create(): Form
	{
		return new Form;
	}
}
