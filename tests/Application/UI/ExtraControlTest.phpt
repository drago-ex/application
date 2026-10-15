<?php

/**
 * Test: Drago\Application\UI\ExtraControl
 */

declare(strict_types=1);

use Drago\Application\UI\ExtraControl;
use Nette\Application\UI\Form;
use Nette\Localization\Translator;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';

class DummyTranslator implements Translator
{
	public function translate(string|Stringable $message, mixed ...$parameters): string
	{
		return vsprintf('translated:' . (string) $message, $parameters);
	}
}

class TestControl extends ExtraControl
{
	public function testTranslate(string $message, string|int ...$parameters): string
	{
		return $this->translate($message, ...$parameters);
	}
}

test('ExtraControl translation without translator', function () {
	$control = new TestControl;
	Assert::same('Hello World', $control->testTranslate('Hello World'));
	Assert::same('Items count: 5', $control->testTranslate('Items count: %d', 5));
});

test('ExtraControl translation with translator', function () {
	$control = new TestControl;
	$control->translator = new DummyTranslator;
	Assert::same('translated:Hello John', $control->testTranslate('Hello %s', 'John'));
});

test('ExtraControl getFormComponent returns base control', function () {
	$control = new TestControl;
	$form = new Form;
	$input = $form->addText('username', 'Username');

	Assert::same($input, $control->getFormComponent($form, 'username'));
});
