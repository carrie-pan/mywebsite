<?php
require_once("../include/open.php");
if(isset($_POST["text"]) && isset($_POST["fieldName"])){
    $text = $_POST["text"];
    $fieldName = $_POST["fieldName"];


    if(isset($_POST["pin"])){
        $pin=$_POST["pin"];
        $sql = "UPDATE `immediate_update` SET `".$fieldName."` = '$text' WHERE `pin` ='$pin'";
    }else{
        $pin=md5($text.time());
        $sql = "INSERT INTO `immediate_update`(`pin`,`".$fieldName."`)
                 VALUES('$pin','$text')";
    }
    $res = mysqli_query($link,$sql);
    if($res){
        $json["status"]="OK";
        $json["content"]="Update Success";
        echo json_encode($json);
    }else{
        $error=mysql_error();
        $json["status"]="ERROR";
        $json["content"]=$error;
        echo json_encode($json);
    }
}else{
    $error="請填入資料!";
    $json["status"]="ERROR";
    $json["content"]=$error;
    echo json_encode($json);
}
?>