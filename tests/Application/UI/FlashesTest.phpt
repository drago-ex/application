<?php declare(strict_types=1);

/**
 * Test: Drago\Application\UI\Flashes
 */

use Drago\Application\UI\Alert;
use Drago\Application\UI\Flashes;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';

test('Flashes property assignment', function () {
	$flash = new Flashes;
	$flash->message = 'Item was saved.';
	$flash->type = Alert::Success;

	Assert::same('Item was saved.', $flash->message);
	Assert::same('success', $flash->type);
});
