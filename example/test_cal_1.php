<?php
	function odd($n)
	{
            $sum = (3*$n) + 1;
	    $mod_1 = mod_num($sum);
	    if($sum != 1)
	    {
		go_loop($sum,$mod_1);
	    }
	    return $sum;
	}
	
	function even($n)
	{
	    $sum = $n / 2;
	    $mod_1 = mod_num($sum);
	    if($sum != 1)
	    {
	        go_loop($sum,$mod_1);
	    }
	    return $sum;
	}
	
	function mod_num($n)
	{
	    $mod = $n % 2;
	    return $mod;
	}
	
	function go_loop($n,$mod)
	{
	    if($mod == 0)
	    {
		/* 偶數 even */
                echo '偶數: '.even($n)."<br/>";
	    }
	    else
	    {
		/* 奇數 odd */
                echo '奇數: '.odd($n)."<br/>";
	    }
	}	
?>
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
        <ol>
            <li>範例題型來自: <a href="http://goo.gl/t3Da6b">一個遞迴函數的問題(有變形過)</a>，程式是自己寫的</li>
            <li>1)任意一個整數(1-9)，假設是n</li>
            <li>2)如果n不是1，且此數是奇數，則做運算，使n = 3n + 1。</li>
            <li>3)如果n不是1，且此數是偶數，則做運算，使n = n / 2。</li>
            <li>4)步驟2及3計算出的 n 如果是奇數，重覆步驟2，如果 n 是偶數，重覆步驟3，直到 n 為1。</li>
            <li>5)計算整數 n ，在步驟 1 至 4 ，n = 3n +1 及 n = n/2 的運算次數</li>
            <li><a href="<?php echo PATH_DOMAIN; ?>test_cal_1.php">重新執行</a>
                | <a href="<?php echo PATH_DOMAIN; ?>test_cal_1_php.html" target="_blank">看程式(新視窗)</a></li>
        </ol>
    <div id="featured-wrapper">
        <div id="extra" class="container">
		<?php
                  	
	           $n = mt_rand(1,9);
	           if($n == 1)
	           {
		     echo '原始數字(不須計算): '.$n;
		     exit();
	           }
	
	           $mod = mod_num($n);
	           echo '原始數字: '.$n."<br/>";
	           go_loop($n,$mod);
                 ?>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>
</body>
</html>			