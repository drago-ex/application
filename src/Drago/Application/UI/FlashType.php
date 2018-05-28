<?php

// Enable strict mode.
declare(strict_types = 1);

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Types of flash messages that we want to distinguish from their meaning.
 */
class FlashType
{
	use Nette\StaticClass;

	// Types for flash messages.
	public const
		SUCCESS = 'success',
		WARNING = 'warning',
		INFO = 'info';
}
