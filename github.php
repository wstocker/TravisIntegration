<?php 
$cmd = shell_exec("git pull /tmp/ 2>&1");

#for debugging
echo $cmd;

?>