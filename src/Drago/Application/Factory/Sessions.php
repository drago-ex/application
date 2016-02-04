<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\Factory;

use Nette;
use Nette\Http\Session;
use Nette\Http\SessionSection;

/**
 * Use of sessions outside presenter.
 * @author Zdeněk Papučík
 */
class Sessions extends Nette\Object
{
	/**
	 * @var Session
	 */
	public $session;

	/**
	 * @var SessionSection
	 */
	public $sessionSection;

	public function __construct(Session $session, $section = NULL)
	{
		$this->session = $session;
		if (isset($section)) {
			$this->sessionSection = $this->session->getSection($section);
		}
	}

	/**
	 * @param  string
	 * @return SessionSection
	 */
	public function getSessionSection($section = NULL)
	{
		if (isset($section)) {

			$this->sessionSection = $this->session->getSection($section);
			return $this->sessionSection;

		} else {
			return $this->sessionSection;
		}
	}

}
