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
	/** @var string Success alert type */
	public const string Success = 'success';

	/** @var string Danger alert type */
	public const string Danger = 'danger';

	/** @var string Warning alert type */
	public const string Warning = 'warning';

	/** @var string Info alert type */
	public const string Info = 'info';
}
