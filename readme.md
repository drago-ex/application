## Drago

Extending Nette Framework

## Configurator

Nette Configurator compared with the Drago Configurator file is extended by an automatic
search configuration files (*.neon). Found configuration files are stored in the cache.

If necessary, we can set the configuration file priority. Priority is set to put the number
in front of the file name, the higher the number, the higher the priority.

The boot file (usually bootstrap), use this command:

```php
// To scan multiple folders, use the array.
$app->addFindConfig(__DIR__ . '/directory');
```

## Flash messages

Tips for a flash message we have defined in this class: [Drago\Application\UI\Flash.php]
(https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Flash.php)

Flash messages are already pre-defined in the Drago Presenter:

```php
$this->messageSuccess('Success message');
$this->messageWarning('Warning message');
$this->messageInfo('Info message');
```

Furthermore, the presenter located parameter language:

```php
$this->lang
```

**Other**

Method for delete files or directories:

```php
$this->deleteThis(__DIR__ . '/path');
```
