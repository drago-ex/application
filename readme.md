## Drago Framework
Simple Framework for small applications based on Nette Framework.

## Configurator class
Nette compared with Drago configuration file is extended by an automatic search configuration files (*.neon).
Found configuration files are stored in the cache.

If necessary, you can set the priority of the configuration file so that they assign a number, larger the
number the higher the priority. **Sample: 9.filename.neon** suitable in case the route.

In addition, some methods are abbreviated. Here you can see how it looks such a setup
[bootstrapper](https://github.com/drago-fw/skeleton/blob/master/app/booter.php).


## Flash messages
Tips for flash messages we have defined in a single file: class
[Drago\Flash.php](https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Flash.php).


## Presenter
Flash messages are already pre-defined in the Presenter, On these lines:
[Success message](https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Presenter.php#L75),
[Warning message](https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Presenter.php#L86) and
[Info message](https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Presenter.php#L97).

It is also the presenter default [Translator](https://github.com/drago-fw/translator), easier access to individual
directories [Dirs](https://github.com/drago-fw/dirs) and actual language that is sent to the template.

**Other**: Furthermore, the presenter located is method for [delete files or directories]
(https://github.com/drago-fw/drago/blob/master/src/Drago/Application/UI/Presenter.php#L64).
