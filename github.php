<?php

require_once('Git.php');

$repo = Git::open('~/public_html/wendydev/drupal8/TravisIntegration');  // -or- Git::create('/path/to/repo')

$repo->add('.');
$repo->commit('Some commit message');
$repo->push('origin', 'master');

?>