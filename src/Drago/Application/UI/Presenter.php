<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use stdClass;

/**
 * Drago presenter.
 * @author Zdeněk Papučík
 */
abstract class Presenter extends Nette\Application\UI\Presenter
{
	/**
	 * Success message for template.
	 * @param string
	 * @return stdClass
	 */
	public function messageSuccess($message)
	{
		return $this->flashMessage($message, Flash::SUCCESS);
	}

	/**
	 * Warning message for template.
	 * @param string
	 * @return stdClass
	 */
	public function messageWarning($message)
	{
		return $this->flashMessage($message, Flash::WARNING);
	}

	/**
	 * Info message for template.
	 * @param string
	 * @return stdClass
	 */
	public function messageInfo($message)
	{
		return $this->flashMessage($message, Flash::INFO);
	}

}
