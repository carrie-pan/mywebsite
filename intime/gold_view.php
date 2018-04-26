<?php
require_once( '../example/include/config.php');
$pageId="ajax";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>jQuery Sortable With AJAX &amp; MYSQL</title>
    <?php include_once("../example/include/link_script.php"); ?>
    <script type="text/javascript">
	$(function() {
	
		var get_gold_info = function() {
			console.log("go");
			//$("div").html("");
			var now_time = new Date($.now());
			$.ajax({
				url: "gold_fn.php",
				data: {},
				type: "POST",
				dataType: 'json',
				success: function(msg){
					console.log(msg);
					var text = "目前 黃金(";
					for(var item in msg) {
						if(item==0) {
							text += msg[item];
						} else if(item==1) {
							text += ") 買進:"+msg[item];
						} else {
							text += " 賣出:"+msg[item];
						}
					}
					$("div#info").html(text + '<br/>更新時間: ' + now_time);
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
<?php include_once("../example/header.php"); ?>
<div id="wrapper">
    <div id="featured-wrapper">
        <div id="extra" class="container">
            <div id="info">Waiting for update - 黃金金額</div>
        </div>
    </div>
    <div id="extra2" class="container"></div>
</div>
<?php include_once("../example/footer.php"); ?>
</body>
</html>