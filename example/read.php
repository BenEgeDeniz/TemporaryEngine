<?php 

include_once "tmpEngine.php";

$tmp = new tmpEngine;

$tmp->setTmpDir("tmp");
$tmp->createTmp("temporary_read_example", "TEST");

echo $tmp->readTmp("temporary_read_example");

?>