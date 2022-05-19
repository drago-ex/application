<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\UI\Control;
use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Security\User;


/**
 * Base template.
 */
class ExtraTemplate extends Template
{
	public Presenter $presenter;
	public Control $control;
	public User $user;
	public string $baseUrl;
	public string $basePath;
}
