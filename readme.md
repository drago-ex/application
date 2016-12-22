## Drago

Extending Nette Framework

## Configurator

Nette Configurator compared with the Drago Configurator file is extended by an automatic
search configuration files. Found configuration files are stored in the own cache.

If necessary, we can set the configuration file priority. Priority is set to put the number
in front of the file name, the higher the number, the higher the priority.

The boot file (usually bootstrap), use this command:

```php
// To scan multiple folders, use the array.
$app->addFindConfig(__DIR__ . '/directory');
```

## Flash messages

Determining type of a flash message is prepared in this class [Drago\Application\UI\Flash.php]
(https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Flash.php),
the Drago Presenter is already built-in flash type messages:

```php
$this->messageSuccess('Success message');
$this->messageWarning('Warning message');
$this->messageInfo('Info message');
```

**Other**

Method for delete files or directories:

```php
$this->deleteThis(__DIR__ . '/path');
```
