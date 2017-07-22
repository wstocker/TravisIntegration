<?php

require_once('Git.php');

$repo = Git::open('~/public_html/wendydev/drupal8/TravisIntegration');  // -or- Git::create('/path/to/repo')

$repo->pull('origin', 'master');

var_dump($repo);

?>