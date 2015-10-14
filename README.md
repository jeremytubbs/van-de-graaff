## Van de Graaff Static Package

Discharge implementation -
```php
    $file = Jeremytubbs\VanDeGraaff\Discharge(file_get_contents('path/to/file.md'));
    $config = $file->getConfig();
    $content = $file->getContent();
    $output = $file->getOutput();
    $markdown = $file->getMarkdown();
```

Generate implementation -
```php
    $generator = Jeremytubbs\VanDeGraaff\Generate($array, $markdown);
    $static = $generator->makeStatic();
    file_put_contents('path/static.md', $static);
```