<?php

// Enable strict mode.
declare(strict_types = 1);

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
	 */
	public function flashMessageSuccess(string $message): stdClass
	{
		return $this->flashMessage($message, FlashType::SUCCESS);
	}

	/**
	 * Flash message with type info.
	 */
	public function flashMessageInfo(string $message): stdClass
	{
		return $this->flashMessage($message, FlashType::INFO);
	}

	/**
	 * Flash message with warning type.
	 */
	public function flashMessageWarning(string $message): stdClass
	{
		return $this->flashMessage($message, FlashType::WARNING);
	}

}
