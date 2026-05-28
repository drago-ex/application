<?php

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Forms\Control;
use Nette\Security\User;
use stdClass;


/** Base template class with common properties for presenters and controls. */
abstract class ExtraTemplate extends Template
{
	public Presenter $presenter;
	public Control $control;
	public User $user;
	public string $baseUrl;
	public string $basePath;

	/** @var array<int, stdClass> */
	public array $flashes = [];
}
