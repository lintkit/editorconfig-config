<?php

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder
	->files()
	->in($GLOBALS['finderOptions']['path'])
	->ignoreVCS(true)
	->ignoreVCSIgnored(true)
	->ignoreDotFiles(false)
	->notPath('node_modules')
;

return $finder;
