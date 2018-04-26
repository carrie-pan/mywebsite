<?php
require_once( '../include/config.php');
$pageId="ajax";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../include/link_script.php"); ?>
    <script type="text/javascript">
	$(function() {
	
		var get_gold_info = function() {
			//$("div").html("");
			var now_time = new Date($.now());
			$.ajax({
				url: "gold_fn.php",
				data: {},
				type: "POST",
				dataType: 'json',
				success: function(result){
                    var text = "目前 黃金";
                    text += " 買進:"+result[0];
                    text += " 賣出:"+result[1];

					$("div.panel-body").html(text + '<br/>更新時間: ' + now_time);
				},
				error: function(xhr, ajaxOptions, thrownError){ 
				   console.log(xhr.status); 
				   console.log(thrownError); 
				}
			});		
		};
		
		setInterval(get_gold_info, 5000);
	});
	</script>
</head>
<body>
<?php include_once("../header.php"); ?>
    <div class="container">

        <div class="page-header"></div>
        
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Waiting for update - 黃金金額</h3>
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>
<?php include_once("../footer.php"); ?>
</body>
</html>