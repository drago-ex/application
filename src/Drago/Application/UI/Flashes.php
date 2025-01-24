<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\HtmlStringable;
use stdClass;


/**
 * Class representing a flash message in the application.
 *
 * This class stores a flash message along with its type, which can
 * be used to display different kinds of notifications in the UI.
 */
class Flashes
{
	/** @var string|stdClass|HtmlStringable Flash message content. */
	public string|stdClass|HtmlStringable $message;

	/** @var string The type of the flash message, e.g. 'success', 'error', etc. */
	public string $type;
}
