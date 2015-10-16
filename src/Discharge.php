<?php

namespace Jeremytubbs\VanDeGraaff;

use Exception;
use Symfony\Component\Yaml\Yaml;
use ParsedownExtra as Parsedown;

class Discharge
{
    /**
     * Regex for seperators
     * @var string
     */
    private static $matcherRegex = "/^-{3}\s?(\w*)\r?\n(.*)\r?\n-{3}\r?\n(.*)/s";

    public function __construct($file)
    {
        preg_match(self::$matcherRegex, $file, $matches);
        $this->matches = $matches;
    }

    public function getFrontmatter()
    {
        if (count($this->matches) == 4) {
            return Yaml::parse($this->matches[2]);
        }
        throw new Exception("File is not properly formated.");

    }

    public function getContent()
    {
        if (count($this->matches) == 4) {
            return (new Parsedown)->text($this->matches[3]);
        }
        throw new Exception("File is not properly formated.");
    }

    public function getOutput()
    {
        if (count($this->matches) == 4) {
            $config = Yaml::parse($this->matches[2]);
            $content = ['content' => (new Parsedown)->text($this->matches[3])];
            $output = array_merge($config, $content);
            return $output;
        }
        throw new Exception("File is not properly formated.");
    }

    public function getMarkdown()
    {
        return $this->matches[3];
    }
}
