<?php
require 'connection.php';
header('Content-Type: application/json');
$label1 = trim($_REQUEST['value1']);
$label2 = trim($_REQUEST['value2']);
$collection=$con->dbforlab->tasks;
$list = $collection->find(array('time_start' => $label1,'time_end' => $label2));
$result = iterator_to_array($list);
$arr = array();
foreach ($result as $key => $value) {

    $arr[] = $value['name_task'];
}

echo json_encode($arr);
$con->close();
