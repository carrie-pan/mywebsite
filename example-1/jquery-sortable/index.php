<?php
require_once( '../include/config.php');
require_once( '../include/open.php');
$pageId="ajax";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../include/link_script.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".test-list").sortable({
                handle : '.handle',
                update : function (event, ui) {
                    var order = $('.test-list').sortable('serialize');
                    //alert(order);
                    $("div.page-header > div.alert-success").load("process-sortable.php?"+order);
                }
            });
            
            $(".test-list").disableSelection();
            
            $('.handle').hover(function(){
                $( this ).css( 'cursor', 'move' );
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
                <h3 class="panel-title">拖曳下方選項做排序</h3>
            </div>
            
            <div class="panel-body">
                <div id="sort1" class="test-list list-group">
                    <?php
                    $sql = "SELECT * FROM interface ORDER BY position";
                    $rs = mysqli_query($link,$sql);
                    while ($rows = mysqli_fetch_array($rs)) {
                        ?>
                        <div class="itemHeader" id="listItem_<?php echo $rows['id'] ?>">
                            <span class="handle list-group-item glyphicon glyphicon-fullscreen">
                                <?php echo $rows['name'] ?>
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
<?php include_once("../footer.php"); ?>
</body>
</html>
