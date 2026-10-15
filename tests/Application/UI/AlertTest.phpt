<?php

/**
 * Test: Drago\Application\UI\Alert
 */

declare(strict_types=1);

use Drago\Application\UI\Alert;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';

test('Alert constant values', function () {
	Assert::same('success', Alert::Success);
	Assert::same('danger', Alert::Danger);
	Assert::same('warning', Alert::Warning);
	Assert::same('info', Alert::Info);
});
