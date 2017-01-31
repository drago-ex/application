<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 *
 * @package Drago
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Utils;

/**
 * Drago presenter.
 * @author Zdeněk Papučík
 */
abstract class Presenter extends Nette\Application\UI\Presenter
{
	/**
	 * Delete files or directories.
	 * @param  string
	 * @return void
	 */
	public function deleteThis($path)
	{
		return Utils\FileSystem::delete($path);
	}

	/**
	 * Success message for template.
	 * @param  string
	 * @return \stdClass
	 */
	public function messageSuccess($message)
	{
		return $this->flashMessage($message, Flash::Success);
	}

	/**
	 * Warning message for template.
	 * @param  string
	 * @return \stdClass
	 */
	public function messageWarning($message)
	{
		return $this->flashMessage($message, Flash::Warning);
	}

	/**
	 * Info message for template.
	 * @param  string
	 * @return \stdClass
	 */
	public function messageInfo($message)
	{
		return $this->flashMessage($message, Flash::Info);
	}

}
