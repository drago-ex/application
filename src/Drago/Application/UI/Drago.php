<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use stdClass;

/**
 * Základní metody pro presenter.
 */
trait Drago
{
	/**
	 * Zpráva, která se šabloně předá jako success.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageSuccess($message)
	{
		return $this->flashMessage($message, Flash::SUCCESS);
	}

	/**
	 * Zpráva, která se šabloně předá jako info.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageInfo($message)
	{
		return $this->flashMessage($message, Flash::INFO);
	}

	/**
	 * Zpráva, která se šabloně předá jako warning.
	 * @param string
	 * @return stdClass
	 */
	public function flashMessageWarning($message)
	{
		return $this->flashMessage($message, Flash::WARNING);
	}

}
