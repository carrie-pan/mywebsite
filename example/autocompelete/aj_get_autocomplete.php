<?php
require_once( '../include/config.php');
require_once( '../include/open.php');

$term=$_GET["term"];
$sql="SELECT * FROM  `interface` WHERE `name` LIKE '%".$term."%'";
$res=mysqli_query($link,$sql);
$json=array();

while($row=mysqli_fetch_assoc($res)){
    $json[]=array(
        'value'=> $row["name"],
        'label'=>$row["name"]
    );
}

echo json_encode($json);

?>