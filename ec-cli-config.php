<?php

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder
	->files()
	->in(__DIR__)
	->ignoreVCS(true)
	->ignoreVCSIgnored(true)
	->ignoreDotFiles(false)
	->notPath('node_modules')
;

return $finder;
