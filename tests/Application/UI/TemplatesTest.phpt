<?php declare(strict_types=1);

/**
 * Test: bundled Latte widgets
 */

use Drago\Application\UI\Alert;
use Latte\Engine;
use Latte\Loaders\StringLoader;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';


function createLatte(): Engine
{
	$latte = new Engine;
	$latte->setTempDirectory(null);
	$latte->addExtension(new Latte\Essential\TranslatorExtension(fn(string|Stringable $message): string => (string) $message));
	return $latte;
}


function flash(string $message, string $type): stdClass
{
	$flash = new stdClass;
	$flash->message = $message;
	$flash->type = $type;
	return $flash;
}


test('All bundled templates compile', function () {
	$latte = createLatte();
	foreach (glob(__DIR__ . '/../../../src/assets/latte/*.latte') as $file) {
		Assert::noError(fn() => $latte->compile($file));
	}
});


test('Flash messages render as dismissible alerts with their type', function () {
	$html = createLatte()->renderToString(
		__DIR__ . '/../../../src/assets/latte/@flash-message.latte',
		['flashes' => [flash('Saved <ok>', Alert::Success)]],
	);

	$dom = Tester\DomQuery::fromHtml($html);
	Assert::true($dom->has('div.alert.alert-success[role=alert]'));
	Assert::match('%A%Saved &lt;ok&gt;%A%', $html);
	Assert::true($dom->has('button.btn-close[data-bs-dismiss=alert]'));
});


test('Toasts render inside the toast container', function () {
	$html = createLatte()->renderToString(
		__DIR__ . '/../../../src/assets/latte/@toast.latte',
		['flashes' => [flash('Deleted', Alert::Danger)]],
	);

	$dom = Tester\DomQuery::fromHtml($html);
	Assert::true($dom->has('#toastContainer .toast.text-bg-danger'));
	Assert::same('Deleted', trim((string) $dom->find('.toast-body')[0]));
});


test('The table widget falls back to no theme for unknown names', function () {
	$latte = createLatte();
	$latte->setLoader(new StringLoader([
		'@table.latte' => file_get_contents(__DIR__ . '/../../../src/assets/latte/@table.latte'),
		'page' => '{embed "@table.latte", tableId: "users", caption: "Users", options: [table: "unknown", head: "primary"]}{block thead}<tr><th>Name</th></tr>{/block}{/embed}',
	]));

	$dom = Tester\DomQuery::fromHtml($latte->renderToString('page'));
	Assert::true($dom->has('table#users.table'));
	Assert::same('Users', (string) $dom->find('caption')[0]);
	Assert::true($dom->has('thead.table-primary'));
	Assert::false($dom->has('tbody[class]'));
});


test('The table widget renders without options', function () {
	$latte = createLatte();
	$latte->setLoader(new StringLoader([
		'@table.latte' => file_get_contents(__DIR__ . '/../../../src/assets/latte/@table.latte'),
		'page' => '{embed "@table.latte"}{block body}<tr><td>Row</td></tr>{/block}{/embed}',
	]));

	$dom = Tester\DomQuery::fromHtml($latte->renderToString('page'));
	Assert::false($dom->has('table[id]'));
	Assert::false($dom->has('caption'));
	Assert::false($dom->has('thead[class]'));
	Assert::false($dom->has('tbody[class]'));
	Assert::true($dom->has('tbody td'));
});
