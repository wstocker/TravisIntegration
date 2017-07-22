<?php 
$cmd = shell_exec("/usr/bin/git pull 2>&1");

#for debugging
echo $cmd;

?>