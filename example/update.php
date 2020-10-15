<?php 

include_once "tmpEngine.php";

$tmp = new tmpEngine;

$tmp->setTmpDir("tmp");
$tmp->createTmp("temporary_update_example", "TEST");

echo $tmp->updateTmp("temporary_update_example", "TEST-UPDATED");

?>