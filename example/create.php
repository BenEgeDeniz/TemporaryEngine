<?php 

include_once "tmpEngine.php";

$tmp = new tmpEngine;

$tmp->setTmpDir("tmp");
$tmp->createTmp("temporary_create_example", "TEST");

?>