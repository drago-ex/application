## Drago Application

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/9d009ab07354420ca1d238842c40cb35)](https://www.codacy.com/app/zdenek.papucik/application?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=drago-ex/application&amp;utm_campaign=Badge_Grade)

Basic methods.

## Flash messages

Drago Presenter is already built-in flash type messages:

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
