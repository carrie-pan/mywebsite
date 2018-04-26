<?php 
require_once("include/config.php"); 
$pageId="ajax";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("include/link_script.php"); ?>
</head>
<body>
<?php include_once("header.php"); ?>
    <div class="container">

        <div class="page-header"></div>
        
        <div class="panel panel-info">
        
            <div class="panel-heading">
            <?php
                if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
                {
                    $proxy_ip = split(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
                    $ip = $proxy_ip[0];
                    echo '<h3 class="panel-title">用HTTP_X_FORWARDED_FOR抓IP - '.$ip.'</h3>';
                }
                else
                {
                    echo '<h3 class="panel-title">用REMOTE_ADDR抓IP - '.$_SERVER["REMOTE_ADDR"].'</h3>';
                }
            ?>
            </div>
         
            <div class="panel-body">
            php 可以透過$SERVER['REMOTE_ADDR']來取得使用者IP<br/>
            可是REMOTE_ADDR不能抓取到有經過proxy(代理伺服器)的真實IP<br/>
            可以用$SERVER['HTTP_X_FORWARDED_FOR']，抓到有經過proxy訪客的真實IP<br/>
            以下範例是，確認是否有抓到$SERVER['HTTP_X_FORWARDED_FOR']<br/>
            若無則$SERVER['REMOTE_ADDR']
            </div>

        </div>
    </div>
<?php include_once("footer.php"); ?>
</body>
</html>	