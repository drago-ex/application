<?php

declare(strict_types = 1);

namespace Test\UI;

use Drago\Application\UI\Alert;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

Assert::type(TYPE_STRING, Alert::PRIMARY);
Assert::same('primary', Alert::PRIMARY);

Assert::type(TYPE_STRING, Alert::SECONDARY);
Assert::same('secondary', Alert::SECONDARY);

Assert::type(TYPE_STRING, Alert::SUCCESS);
Assert::same('success', Alert::SUCCESS);

Assert::type(TYPE_STRING, Alert::DANGER);
Assert::same('danger', Alert::DANGER);

Assert::type(TYPE_STRING, Alert::WARNING);
Assert::same('warning', Alert::WARNING);

Assert::type(TYPE_STRING, Alert::INFO);
Assert::same('info', Alert::INFO);

Assert::type(TYPE_STRING, Alert::LIGHT);
Assert::same('light', Alert::LIGHT);

Assert::type(TYPE_STRING, Alert::DARK);
Assert::same('dark', Alert::DARK);
