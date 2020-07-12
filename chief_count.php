<?php
require 'connection.php';
header('Content-Type: application/json');
$test = trim($_REQUEST['chief']);
$cond=array("chief"=>$test);
$collection=$con->dbforlab->tasks;

$list = $collection->find(array('chief' => $test));
$result = iterator_to_array($list);
echo "Name:" . $test   ;
echo "Count:" . ($list->count($test));

$con->close();


