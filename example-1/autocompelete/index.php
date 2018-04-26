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

            $("#search").autocomplete({
                source:'aj_get_autocomplete.php',
                scroll: true,
                minLength:2,
                messages: {
                    noResults: '',
                    results: function() {}
                }
            });
            
            /*
            var span=$("div#info").find("span");
            var text = $("#searchWord").val();
            var matchReg = new RegExp(text,'ig');
            var matchVar = span.html().match(matchReg);
            if(matchVar){
                span.html(span.html().replace(text,'<strong>'+text+'</strong>'))
            }
            */
        });
    </script>
</head>
<body>
<?php include_once("../header.php"); ?>
    <div class="container">

        <div class="page-header">
            <div class="alert alert-success" role="alert">
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
        <div class="panel panel-info">
        
            <div class="panel-heading">
                <h3 class="panel-title">Autocompelete</h3>
            </div>
            
            <div class="panel-body">
                <form method="GET" action="index.php">
                    Search : <input type="text" id="search" name="search" /> EX:apple,orange,grape
                </form>
            </div>
            
        </div>
    </div>
<?php include_once("../footer.php"); ?>
</body>
</html>