<?php

include '../include/open.php';
foreach ($_GET['listItem'] as $position => $item){
$position=$position+1;
    $sql = "UPDATE `interface` SET `position` = $position WHERE `id` = $item";
	$res=mysqli_query($link,$sql);

}

if($res){
	echo 'Update Success';
}else{
	echo 'Update Fault';
}
?>