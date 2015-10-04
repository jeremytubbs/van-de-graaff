<?php

namespace Jeremytubbs\VanDeGraaff;

use Exception;
use Symfony\Component\Yaml\Yaml;

class Generate
{
    public function __construct($array, $markdown)
    {
        $this->yaml = Yaml::dump($array, 2);
        $this->markdown = $markdown;
    }

    public function  makeStatic()
    {
        return $this->staticTemplate($this->yaml, $this->markdown);
    }

    public function staticTemplate($frontmatter, $markdown)
    {
        return <<<EOF
---
$frontmatter
---
$markdown

EOF;
    }
}
