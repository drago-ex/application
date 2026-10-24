<?php

/**
 * Test: Drago\Application\UI\ExtraControl presenter helpers
 */

declare(strict_types=1);

use Drago\Application\UI\ExtraControl;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Http;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';


class HelperControl extends ExtraControl
{
}


#[AllowDynamicProperties]
class StubTemplate implements Nette\Application\UI\Template
{
	private ?string $file = null;


	public function render(): void
	{
	}


	public function setFile(string $file): static
	{
		$this->file = $file;
		return $this;
	}


	public function getFile(): ?string
	{
		return $this->file;
	}
}


class HelperPresenter extends Presenter
{
	/** @var list<array{?string, bool}> */
	public array $redrawn = [];

	public bool $ajax = false;


	protected function createTemplate(?string $class = null): Nette\Application\UI\Template
	{
		return new StubTemplate;
	}


	public function isAjax(): bool
	{
		return $this->ajax;
	}


	public function redrawControl(?string $snippet = null, bool $redraw = true): void
	{
		$this->redrawn[] = [$snippet, $redraw];
	}
}


function createControls(): array
{
	$presenter = new HelperPresenter;
	$request = new Http\Request(new Http\UrlScript('http://localhost/'));
	$response = new Http\Response;
	$presenter->injectPrimary($request, $response, session: new Http\Session($request, $response));

	$grid = new HelperControl;
	$presenter->addComponent($grid, 'grid');
	return [$presenter, $grid];
}


test('Helpers act on the presenter', function () {
	[$presenter, $grid] = createControls();

	Assert::false($grid->isAjax());
	$presenter->ajax = true;
	Assert::true($grid->isAjax());

	$flash = $grid->addFlashMessage('Saved', 'success');
	Assert::same('Saved', $flash->message);
	Assert::same('success', $flash->type);

	$grid->addRedraw('content');
	Assert::same([['content', true]], $presenter->redrawn);
});


test('getFormComponent() returns null for a component that is not a form control', function () {
	[, $grid] = createControls();
	$form = new Form;
	$form->addContainer('address');

	Assert::null($grid->getFormComponent($form, 'address'));
});
