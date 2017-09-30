<?php

/**
 * Drago Application
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Typy pro flash messages, které chceme odlišit od jejich významu
 * a patřičně odlišit dle kaskádových stylů.
 */
class Flash
{
	use Nette\StaticClass;
	const
		SUCCESS = 'success',
		WARNING = 'warning',
		INFO = 'info';
}
