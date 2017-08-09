<?php

/**
 * Extending for Nette Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Flash messages that we want to distinguish from their importance.
 */
class Flash
{
	use Nette\StaticClass;
	const
		WARNING = 'warning',
		SUCCESS = 'success',
		INFO = 'info';
}
