<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;

use Nette;
use stdClass;

/**
 * Drago presenter.
 */
abstract class Presenter extends Nette\Application\UI\Presenter
{
	/**
	 * Zpráva reprezentuje úspěšnost.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageSuccess($message)
	{
		return $this->flashMessage($message, Flash::SUCCESS);
	}

	/**
	 * Zpráva reprezentuje informaci.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageInfo($message)
	{
		return $this->flashMessage($message, Flash::INFO);
	}

	/**
	 * Zpráva reprezentuje upozornění.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageWarning($message)
	{
		return $this->flashMessage($message, Flash::WARNING);
	}

}
