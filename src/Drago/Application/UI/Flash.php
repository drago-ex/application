<?php

/**
 * Drago, Extending Nette Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Flash messages that we want to distinguish from their importance.
 * @author Zdeněk Papučík
 */
class Flash
{
	use Nette\SmartObject;
	const
		Warning = 'warning',
		Success = 'success',
		Info = 'info';
}
