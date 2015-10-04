## Van de Graaff Static Package

Discharge implementation -
```php
    $file = Jeremytubbs\VanDeGraaff\Discharge(file_get_contents('path/to/file.md'));
    $config = $file->getConfig();
    $content = $file->getContent();
    $output = $file->getOutput();
```

Generate implementation -
```php
    $file = Jeremytubbs\VanDeGraaff\Generate($array, $markdown);
    $static = $file->getStatic();
    file_put_contents('path/static.md', $static);
```