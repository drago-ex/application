<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\HtmlStringable;
use stdClass;


/**
 * Class representing a flash message in the application.
 */
final class Flashes
{
	public string|stdClass|HtmlStringable $message;
	public string $type;
}
