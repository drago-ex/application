<?php declare(strict_types=1);

/**
 * Test: Drago\Application\UI\Factory
 */

use Drago\Application\UI\Factory;
use Nette\Application\UI\Form;
use Nette\Localization\Translator;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';

class DummyTranslator implements Translator
{
	public function translate(string|Stringable $message, mixed ...$parameters): string
	{
		return 'translated:' . (string) $message;
	}
}

readonly class TestFormFactory extends Factory
{
	protected function createForm(): Form
	{
		return new Form;
	}
}

test('Factory creates form and assigns translator', function () {
	$translator = new DummyTranslator;
	$factory = new TestFormFactory($translator);

	$form = $factory->create();
	Assert::type(Form::class, $form);
	Assert::same($translator, $form->getTranslator());
});
