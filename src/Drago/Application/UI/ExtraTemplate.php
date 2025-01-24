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
use stdClass;


/**
 * Base template class extending Nette's Template.
 * This class holds various common properties and methods to
 * render templates with necessary data, including user information
 * and flash messages.
 */
class ExtraTemplate extends Template
{
	/** @var Presenter The Presenter to which the template belongs. */
	public Presenter $presenter;

	/** @var Control The Control that manages the template. */
	public Control $control;

	/** @var User The currently authenticated user. */
	public User $user;

	/** @var string The base URL for the application. */
	public string $baseUrl;

	/** @var string The base path for static assets. */
	public string $basePath;

	/** @var stdClass[] List of flash messages to be displayed (key-value pairs). */
	public array $flashes = [];
}
