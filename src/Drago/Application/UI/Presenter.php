<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use Nette\Utils;

use Drago\Application\Directories\Dirs;
use Drago\Localization\Translator;

/**
 * Drago presenter.
 * @author Zdeněk Papučík
 */
abstract class Presenter extends Nette\Application\UI\Presenter
{
	/**
	 * Application language.
	 * @var string
	 * @persistent
	 */
	public $lang;

	/**
	 * Directory structure.
	 * @var Dirs
	 * @inject
	 */
	public $dirs;

	// Setup rendering.
	protected function beforeRender()
	{
		$this->template->lang = $this->lang;
	}

	/**
	 * Transmission and processing of translation file.
	 * @param  string
	 * @return Translator
	 * @throws \Exception
	 */
	public function translator($module)
	{
		$path = $this->dirs->getModulesDir() . '/' . $module . '/locales/' . $this->lang . '.ini';
		if (!is_file($path)) {
			throw new \Exception('Missing translation file in ' . $path);

		}

		// Pass found translation file.
		return new Translator(parse_ini_file($path));
	}

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
