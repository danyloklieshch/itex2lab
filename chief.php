<?php
require 'connection.php';
header('Content-Type: application/json');
$con = new MongoClient();
$test = trim($_REQUEST['chief']);
$cond=array("chief"=>$test);
//if (isset($cursor))
$collection=$con->dbforlab->tasks;

$list = $collection->find(array('chief' => $test));
$result = iterator_to_array($list);
$cars = array();
echo "Name:" . $test ;
foreach ($result as $key => $value) {
    //$cars[] = $value['chief'];

    $cars[] = $value['workers'];
}

echo json_encode($cars);
//while($document = $list->getNext())
//{
  //  echo "Name:" . $test ;
  //  echo "Worker:" . $document["workers"]  ;

//}

$con->close();


