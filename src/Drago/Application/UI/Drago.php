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
	 * @return stdClass
	 */
	public function flashMessageSuccess($message)
	{
		return $this->flashMessage($message, FlashType::SUCCESS);
	}

	/**
	 * Flash message with type info.
	 * @return stdClass
	 */
	public function flashMessageInfo($message)
	{
		return $this->flashMessage($message, FlashType::INFO);
	}

	/**
	 * Flash message with warning type.
	 * @return stdClass
	 */
	public function flashMessageWarning($message)
	{
		return $this->flashMessage($message, FlashType::WARNING);
	}

}
