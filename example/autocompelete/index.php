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
                scroll: true,
                minLength:2
            });
            var span=$("div#info").find("span");
            var text = $("#searchWord").val();
            var matchReg = new RegExp(text,'ig');
            var match = span.html().match(matchReg);
            if(match){
                span.html(span.html().replace(text,'<strong>'+text+'</strong>'))
            }
        });
    </script>
</head>
<body>
<?php include_once("../header.php"); ?>
<div id="wrapper">
    <div id="featured-wrapper">
        <div id="extra" class="container">
            <div id="info">
                <?php
                if(isset($_GET["search"])){
                    $search=$_GET["search"];
                    $sql="SELECT * FROM  `interface` WHERE `name` LIKE '%".$search."%'";
                    $res=mysqli_query($link,$sql);

                    while($row=mysqli_fetch_assoc($res)){

                        $name=$row["name"];
                        $id=$row["id"];
                        echo '<p>'.$id.'</p>';
                        echo '<span>'.$name.'</span>';
                    }
                    echo '<input type="hidden" id="searchWord" value="'.$search.'">';
                }
                ?>

            </div>
        </div>
        <div id="extra3" class="container">
            <form method="GET" action="index.php">
                Search : <input type="text" id="search" name="search" /> EX:apple,orange,grape
            </form>
        </div>
    </div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>