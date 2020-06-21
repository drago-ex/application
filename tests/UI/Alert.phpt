<?php

declare(strict_types = 1);

use Drago\Application\UI\Alert;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

Assert::type('string', Alert::PRIMARY);
Assert::same('primary', Alert::PRIMARY);

Assert::type('string', Alert::SECONDARY);
Assert::same('secondary', Alert::SECONDARY);

Assert::type('string', Alert::SUCCESS);
Assert::same('success', Alert::SUCCESS);

Assert::type('string', Alert::DANGER);
Assert::same('danger', Alert::DANGER);

Assert::type('string', Alert::WARNING);
Assert::same('warning', Alert::WARNING);

Assert::type('string', Alert::INFO);
Assert::same('info', Alert::INFO);

Assert::type('string', Alert::LIGHT);
Assert::same('light', Alert::LIGHT);

Assert::type('string', Alert::DARK);
Assert::same('dark', Alert::DARK);
