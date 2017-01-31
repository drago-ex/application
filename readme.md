## Drago Application

Basic methods.

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
