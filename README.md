## Simple Static File Parser

Example implementation -
```php
    $file = new Jeremytubbs\ParseStatic\File(file_get_contents('path/to/file.md'));
    $config = $file->getConfig();
    $content = $file->getContent();
```