<?php

declare(strict_types = 1);

namespace Test\UI;

use Drago;
use Tester\Assert;
use Drago\Application\UI\Alert;

require __DIR__ . '/../bootstrap.php';

Assert::type(TYPE_STRING, Alert::PRIMARY);
Assert::type('primary', Alert::PRIMARY);

Assert::type(TYPE_STRING, Alert::SECONDARY);
Assert::type('secondary', Alert::SECONDARY);

Assert::type(TYPE_STRING, Alert::SUCCESS);
Assert::type('success', Alert::SUCCESS);

Assert::type(TYPE_STRING, Alert::DANGER);
Assert::type('danger', Alert::DANGER);

Assert::type(TYPE_STRING, Alert::WARNING);
Assert::type('warning', Alert::WARNING);

Assert::type(TYPE_STRING, Alert::INFO);
Assert::type('info', Alert::INFO);

Assert::type(TYPE_STRING, Alert::LIGHT);
Assert::type('light', Alert::LIGHT);

Assert::type(TYPE_STRING, Alert::DARK);
Assert::type('dark', Alert::DARK);
