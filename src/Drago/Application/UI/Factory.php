<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Application\UI;

use Nette;
use Nette\Application\UI\Form;


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
