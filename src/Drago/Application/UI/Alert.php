<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;


/**
 * Alert type for flash messages.
 * Contains predefined alert types to be used for different flash message categories.
 */
class Alert
{
	public const string Success = 'success';

	public const string Danger = 'danger';

	public const string Warning = 'warning';

	public const string Info = 'info';
}
