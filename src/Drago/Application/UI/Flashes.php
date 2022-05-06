<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\HtmlStringable;
use stdClass;


class Flashes
{
	public string|stdClass|HtmlStringable $message;
	public string $type;
}
