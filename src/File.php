<?php

namespace Jeremytubbs\ParseStatic;

use Exception;
use Symfony\Component\Yaml\Yaml;
use Parsedown;

class File
{
    /**
     * Regex for seperators
     * @var string
     */
    private static $matcherRegex = "/^-{3}\s?(\w*)\r?\n(.*)\r?\n-{3}\r?\n(.*)/s";

    public function __construct($input)
    {
        preg_match(self::$matcherRegex, $input, $matches);
        $this->matches = $matches;
    }

    public function getConfig()
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
}

