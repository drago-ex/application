## Drago Framework
Simple Framework for small applications based on Nette Framework.

## Configurator
Nette Configurator compared with the Dragon Configurator file is extended by an automatic
search configuration files (* .neon). Found configuration files are stored in the cache.

If necessary, we can set the configuration file priority. Priority is set to put the number
in front of the file name, the higher the number, the higher the priority.

In addition, some methods are abbreviated. Here you can see how it looks such a setup
[bootstrapper](https://github.com/drago-fw/skeleton/blob/master/app/booter.php).


## Flash messages
Tips for a flash message we have defined in this class: [Drago\Flash.php]
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
public $lang;
```

Easier access to individual directories [Dirs](https://github.com/drago-fw/dirs):
```php
public $dirs;
```

Translation application is used [Translator](https://github.com/drago-fw/translator):
```php
$this->translator($module);
```

**Other**: Method for delete files or directories:
```php
$this->deleteThis($path);
```
