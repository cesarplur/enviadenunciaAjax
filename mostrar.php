<?php
$con = new mysqli("localhost","cesarplur","cesarplur","pruebas");
$con->query("SET CHARACTER SET utf8");
$data_array = array();
$sql = "select * from denuncias";
$query = $con->query($sql);
$request = [];
while($data = $query->fetch_object()){
	//$data = new \stdclass;
    $request[] = $data;
}
$new_array = array("data"=>$request);
echo json_encode($new_array);
?>