<?php
require_once( '../include/config.php');
require_once( '../include/open.php');
$pageId="ajax";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>jQuery Sortable With AJAX &amp; MYSQL</title>
    <?php include_once("../include/link_script.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".test-list").sortable({
                handle : '.handle',
                update : function () {
                    var order = $('.test-list').sortable('serialize');
                    //alert(order);
                    $("#info").load("process-sortable.php?"+order);
                }
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
    </div>
    <div id="extra2" class="container">
	拖曳下方選項做排序
        <div id="sort1" class="test-list">
            <?php
            $sql = "select * from interface order by position";
            $rs = mysqli_query($link,$sql);
            while ($rows = mysqli_fetch_array($rs)) {
                ?>
                <div class="itemHeader" id="listItem_<?php echo $rows['id'] ?>"><img src="arrow.png" alt="move" width="16" height="16" class="handle" /><strong><?php echo $rows['name'] ?> </strong></div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>