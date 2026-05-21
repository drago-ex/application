<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Bridges\ApplicationLatte\Template;
use stdClass;


/** Base template class with common properties for presenters and controls. */
class ExtraTemplate extends Template
{
	/** @var array<int, stdClass> */
	public array $flashes = [];
}
