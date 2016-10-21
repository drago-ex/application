## Drago Framework

Simple Framework for small applications based on Nette Framework.

## Configurator

Nette Configurator compared with the Dragon Configurator file is extended by an automatic
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
(https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Flash.php).

## Presenter

Flash messages are already pre-defined in the Presenter:

```php
$this->messageSuccess($message);
$this->messageWarning($message);
$this->messageInfo($message);
```

Furthermore, the presenter located parameter language:

```php
$this->lang
```

Easier access to individual directories [Drago\Directory\Dirs.php](https://github.com/drago-fw/dirs)

```php
$this->dirs
```

**Other**

Method for delete files or directories:

```php
$this->deleteThis($path);
```
