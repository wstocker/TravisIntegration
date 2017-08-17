<?php
include('Git.php');

//$repo = Git::open('~/public_html/wendydev/drupal8/TravisIntegration');  // -or- Git::create('/path/to/repo')
$repo = Git::open('/Users/wendyweihs/Documents/drupal-8.3.5')

$repo->pull('origin', 'master');
var_dump($repo);
?>