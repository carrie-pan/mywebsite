<?php
require_once("../include/open.php");
foreach ($_POST['list'] as $position => $item){
	$position=$position+1;
    $sql = "UPDATE `interface` SET `position` = $position WHERE `pin` = '$item'";
	$res=mysqli_query($sql);
}

if($res){
 $json["status"]="OK";
 $json["content"]=$sql;
echo json_encode($json);
}else{
$error=mysql_error();
 $json["status"]="ERROR";
 $json["content"]=$error;
echo json_encode($json);
}
?>