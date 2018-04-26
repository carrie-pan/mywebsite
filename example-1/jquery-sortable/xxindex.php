<?php include 'include/open.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>jQuery Sortable With AJAX &amp; MYSQL</title>
        <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="jquery-ui-1.7.1.custom.min.js"></script>
        <link rel='stylesheet' href='styles.css' type='text/css' media='all' />
        <script type="text/javascript">

			$(document).ready(function() {
                $(".test-list").sortable({
                    handle : '.handle'
                });
				$('#btn').click(function(){
					$.ajax({
						url:'json.php',
						type:'POST',
						dataType:'json',
						data: $('.test-list').sortable('serialize'),
						success:function(e){
							alert($('.test-list').sortable('serialize'));
							if(e.status=="OK"){
								$('#msg').html(e.content);
							}
							if(e.status=="ERROR"){
								$('#msg').html(e.content);
							}
						},
						error:function(d){
						alert($('.test-list').sortable('serialize'));
							$('#msg').html(d.content);
						}
					});
				});
            });

        </script>
        <div id="info">Waiting for update</div>
    </head>

    <body>
	<div id="msg"></div>
		<form id="test" name="test">
        <ul id="sort1" class="test-list">
            <?php
            $sql = "select * from interface order by position";
            $rs = mysql_query($sql);
            while ($rows = mysql_fetch_array($rs)) {
            ?>
                <li class="itemHeader" id="listItem_<?php echo $rows['pin'] ?>"><img src="arrow.png" alt="move" width="16" height="16" class="handle" />
					<strong>Item <?php echo $rows['pin'] ?> </strong>
				</li>
            <?php } ?>
        </ul>
		<input type="button" id="btn" name="btn" value="OK">
		</form>
    </body>
</html>