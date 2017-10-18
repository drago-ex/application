<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Types of flash messages that we want to distinguish from their meaning.
 */
class Flash
{
	use Nette\StaticClass;
	const
		SUCCESS = 'success',
		WARNING = 'warning',
		INFO = 'info';
}
