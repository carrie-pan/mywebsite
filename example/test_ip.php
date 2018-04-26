<?php 
require_once("include/config.php"); 
$pageId="home";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
 
Name       : Escalier
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131022
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Example Website</title>
    <meta name="keywords" content="Hsiu Pan = Example Website" />
    <meta name="description" content="Hsiu Pan = Example Website" />
    <link rel="shortcut icon" type="image/png" href="emgz/hsiu.png" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' href='css/styles.css' type='text/css' media='all' />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<?php include_once("header.php"); ?>
<div id="wrapper">
    <div id="featured-wrapper">
        <div id="extra" class="container">
		<?php
			if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			{
				$proxy_ip = split(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
				$ip = $proxy_ip[0];
				echo 'HTTP_X_FORWARDED_FOR - '.$ip;
			}
			else
			{
				echo 'REMOTE_ADDR - '.$_SERVER["REMOTE_ADDR"];
			}

		?>
        </div>
        php 可以透過$SERVER['REMOTE_ADDR']來取得使用者IP </br>
        可是REMOTE_ADDR不能抓取到有經過proxy(代理伺服器)的真實IP </br>
        可以用$SERVER['HTTP_X_FORWARDED_FOR']，抓到有經過proxy訪客的真實IP </br>
    </div>
</div>
<?php include_once("footer.php"); ?>
</body>
</html>	