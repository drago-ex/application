<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Application\UI;

use Nette\Application\UI\Form;
use Nette;


/**
 * Creating factories.
 */
class Factory
{
	use Nette\SmartObject;

	public function create(): Form
	{
		return new Form;
	}
}
