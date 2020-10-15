<?php 

include_once "tmpEngine.php";

$tmp = new tmpEngine;

$tmp->setTmpDir("tmp");
$tmp->createTmp("temporary_remove_example", "TEST");

echo $tmp->removeTmp("temporary_remove_example");

?>