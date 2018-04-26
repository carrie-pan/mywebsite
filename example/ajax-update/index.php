<?php
require_once( '../include/config.php');
require_once( '../include/open.php');
$pageId="ajax";
function showIpdateForm(){
    global $link;
    $sql="SELECT * FROM `immediate_update` ";
    $res=mysqli_query($link,$sql);
    if($res){
        echo '<table id="formc">'."\r\n";
        echo '<caption>即時更新</caption>'."\r\n";
        while($row=mysqli_fetch_assoc($res)){
            $name=$row["name"];
            $title=$row["title"];
            $sdesc=$row["sdesc"];
            $pin=$row["pin"];
            echo '
                <tr>
                    <th>Name:</th>
                    <td>
                        <input type="text" id="name" value="'.$name.'"/>
                        <input type="hidden" class="fieldName" value="name"/>
                    </td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td>
                        <input type="text" id="title" value="'.$title.'"/>
                        <input type="hidden" class="fieldName" value="title"/>
                    </td>
                </tr>
                <tr>
                    <th>Short DESC:</th>
                    <td>
                        <input type="text" id="sdesc" value="'.$sdesc.'"/>
                        <input type="hidden" class="fieldName" value="sdesc"/>
                        <input type="hidden" id="pin" value="'.$pin.'"/>
                    </td>
                </tr>';
        }
        echo '</table>'."\r\n";
    }
}
?>
<!doctype html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <title>Update Data With AJAX &amp; MYSQL</title>
    <?php include_once("../include/link_script.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("input[type='text']").blur(function(){
                var $this =$(this);
                var text =$(this).val();
                var pin =$("#pin").val();
                var fieldName =$(this).parents("tr").find(".fieldName").val();
                $.ajax({
                    url: "ajax_update.php",
                    type:'POST',
                    dataType:'json',
                    data: {
                        text:text,
                        pin:pin,
                        fieldName:fieldName
                    },
                    success: function(data){

                        if(data.status=='OK'){
                             $this.effect("highlight",{color: "#7892b6"},2000);
                            $("#info").text(data.content);
                        }else{
							$this.effect("highlight",{color: "#FF231A"},2000);
                            $("#info").text(data.content);
                        }
                    },error:function(xhr, ajaxOptions, thrownError){
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            });
        });
    </script>
</head>
<body>
<?php include_once("../header.php"); ?>
<div id="wrapper">
    <div id="featured-wrapper">
        <div id="extra" class="container">
            <div id="info">Waiting for update</div>
        </div>
        <div id="extra3" class="container">
            <?php showIpdateForm(); ?>
        </div>
    </div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>