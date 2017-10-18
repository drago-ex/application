<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use stdClass;

/**
 * Basic methods for the presenter.
 */
trait Drago
{
	/**
	 * Flash message with success type.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageSuccess($message)
	{
		return $this->flashMessage($message, Flash::SUCCESS);
	}

	/**
	 * Flash message with type info.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageInfo($message)
	{
		return $this->flashMessage($message, Flash::INFO);
	}

	/**
	 * Flash message with warning type.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageWarning($message)
	{
		return $this->flashMessage($message, Flash::WARNING);
	}

}
