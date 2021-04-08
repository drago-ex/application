<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;


/**
 * Alert type for flash messages.
 */
class Alert
{
	public const
		PRIMARY = 'primary',
		SECONDARY = 'secondary',
		SUCCESS = 'success',
		DANGER = 'danger',
		WARNING = 'warning',
		INFO = 'info',
		LIGHT = 'light',
		DARK = 'dark';
}
