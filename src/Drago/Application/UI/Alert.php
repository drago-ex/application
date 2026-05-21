<?php

declare(strict_types=1);

namespace Drago\Application\UI;


/** Predefined alert types for flash messages. */
class Alert
{
	public const string
		Success = 'success',
		Danger = 'danger',
		Warning = 'warning',
		Info = 'info';
}
