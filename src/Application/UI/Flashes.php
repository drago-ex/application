<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\HtmlStringable;
use stdClass;


final class Flashes
{
	public string|stdClass|HtmlStringable $message;
	public string $type;
}
