<?php
require_once( '../include/config.php');
require_once( '../include/open.php');
$pageId="ajax";
function showIpdateForm(){
    global $link;
    $sql="SELECT * FROM `immediate_update` ";
    $res=mysqli_query($link,$sql);
    if($res){
        echo '<div class="panel-heading">
                <strong>請填寫一些描述</strong>
              </div>'."\r\n";
        echo '<table class="table" id="formc">'."\r\n";
        while($row=mysqli_fetch_assoc($res)){
            $name=$row["name"];
            $title=$row["title"];
            $sdesc=$row["sdesc"];
            $pin=$row["pin"];
            echo '
                <tr>
                    <th>Name:</th>
                    <td>
                        <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" id="name" value="'.$name.'"/>
                        <input type="hidden" class="fieldName" value="name"/>
                    </td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td>
                        <input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1" id="title" value="'.$title.'"/>
                        <input type="hidden" class="fieldName" value="title"/>
                    </td>
                </tr>
                <tr>
                    <th>DESC:</th>
                    <td>
                        <input type="text" class="form-control" placeholder="DESC" aria-describedby="basic-addon1" id="sdesc" value="'.$sdesc.'"/>
                        <input type="hidden" class="fieldName" value="sdesc"/>
                        <input type="hidden" id="pin" value="'.$pin.'"/>
                    </td>
                </tr>';
        }
        echo '</table>'."\r\n";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                            $(".alert-success").text(data.content);
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

    <div class="container">

        <div class="page-header">
            <div class="alert alert-success" role="alert">
                Waiting for update
            </div>
        </div>
        
        
        <div class="panel panel-info">
        
            <div class="panel-heading">
                <h3 class="panel-title">更新下列欄位</h3>
            </div>
            
            <div class="panel-body">
                <?php showIpdateForm(); ?>
            </div>
            
        </div>
    </div>
<?php include_once("../footer.php"); ?>
</body>
</html>