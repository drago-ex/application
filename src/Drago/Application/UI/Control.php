<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette\Application\UI;
use stdClass;

/**
 * Base control.
 */
class Control extends UI\Control
{
	/**
	 * Is AJAX request?
	 * @return bool
	 */
	public function isAjax()
	{
		return $this->presenter->isAjax();
	}

	/**
	 * Returns pair signal receiver and name.
	 * @return array|null
	 */
	public function getSignal()
	{
		return $this->presenter->getSignal();
	}

	/**
	 * Saves the message to template.
	 * @param string $message
	 * @param string $type
	 * @return stdClass
	 */
	public function flashMessage($message, $type = 'info')
	{
		parent::flashMessage($message, $type);
		return $this->presenter->flashMessage($message, $type);
	}

}
