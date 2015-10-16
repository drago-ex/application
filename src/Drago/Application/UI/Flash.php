<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Flash messages that we want to distinguish from their importance.
 * @author Zdeněk Papučík
 */
class Flash extends Nette\Object
{
	const Warning = 'warning';
	const Success = 'success';
	const Info = 'info';
}
