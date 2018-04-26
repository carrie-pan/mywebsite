<?php
require_once( '../include/config.php');
require_once( '../include/open.php'); 
?>
<!doctype html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <title>Autocomplete</title>
    <?php include_once("../include/link_script.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").autocomplete({
                source:'aj_get_autocomplete.php',
                minLength:2
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
            <form method="post" action="">
                Name : <input type="text" id="search" name="search" />
            </form>
        </div>
    </div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>