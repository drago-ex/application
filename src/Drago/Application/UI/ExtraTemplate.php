<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Application\UI;

use Nette\Application\IPresenter;
use Nette\Application\UI\Control;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Security\User;
use stdClass;


/**
 * Base template.
 */
class ExtraTemplate extends Template
{
	public IPresenter $presenter;
	public Control $control;
	public User $user;
	public string $baseUrl;
	public string $basePath;

	/** @var stdClass[] */
	public array $flashes = [];
}
