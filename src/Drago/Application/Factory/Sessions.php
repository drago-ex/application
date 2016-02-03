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
	private $session;

	/**
	 * @var SessionSection
	 */
	private $sessionSection;

	public function __construct(Session $session)
	{
		$this->session = $session;
	}

	/**
	 * @return Session
	 */
	public function getSession()
	{
		return $this->session;
	}

	/**
	 * @param  string
	 * @return SessionSection
	 */
	public function getSessionSection($section)
	{
		$this->sessionSection = $this->getSession()->getSection($section);
		return $this->sessionSection;
	}

}
