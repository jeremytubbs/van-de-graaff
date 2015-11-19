## Van de Graaff Static Package

Discharge implementation -
```php
    $file = Jeremytubbs\VanDeGraaff\Discharge(file_get_contents('path/to/file.md'));
    $frontmatter = $file->getFrontmatter(); // returns frontmatter array
    $content = $file->getContent(); // returns HTML content
    $output = $file->getOutput(); // returns both frontmatter array and HTML content
    $markdown = $file->getMarkdown(); // returns content as markdown
```

Generate implementation -
```php
    $generator = Jeremytubbs\VanDeGraaff\Generate($array, $markdown);
    $static = $generator->makeStatic();
    file_put_contents('path/static.md', $static);
```
