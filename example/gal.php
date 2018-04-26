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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' href='css/styles.css' type='text/css' media='all' />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

    <style>
	body {
		font-size: 14px;
	}
	/*Button Style*/
	.gal_btn {
		float:left;
		height:auto;
		font:76%/150% "Lucida Grande", Geneva, 
		Verdana, Arial, Helvetica, sans-serif;
		width:10em;
		text-align:center;
		white-space:nowrap;
	}
	/*Button Arrow Styles*/
	.arrows {
		font-size:90%;
		margin:0.2em;
	}
	/*Button link styles*/
	.gal_btn a:link, .gal_btn a:visited {
		color: #eee;
		background-color:#1e5184;
		font-size:1em;
		font-weight:bolder;
		text-decoration: none;
		border-bottom:0.1em solid #555;
		border-right:0.1em solid #555;
		border-top:0.1em solid #ccc;
		border-left:0.1em solid #ccc;
		margin: 0.2em;
		padding:0.2em;
		display:block;
	}
	.gal_btn a:hover {
		background-color:#003366;
		color:#999;
		border-top:0.1em solid #777;
		border-left:0.1em solid #777;
		border-bottom:0.1em solid #aaa;
		border-right:0.1em solid #aaa;
		padding:0.2em;
		margin: 0.2em;
	}
	ul#gal_list
	{
		padding: 2em;
		list-style: none;
	}
	ul#gal_list li
	{
		position: absolute;
	}
	li.selected
	{
		z-index: 99;
	}
	.img
	{
		width: 200px;
		height: 200px;
	}
        div#gal_block
        {
             margin: 5px 5px 100px 300px;
	     height: 350px;
        }
    </style>
    <script type="text/javascript" src="js/gal.js"></script>
</head>
<body>
<?php include_once("header.php"); ?>
<div id="wrapper">
    <div id="featured-wrapper">
        <div id="extra" class="container">
             圖片來源: <a href="http://www.everystockphoto.com/">www.everystockphoto.com</a>
        </div>
        <div id="gal_block">
		<input type="button" class="gal_btn" id="btn_next" value="Next">
		<input type="button" class="gal_btn" id="btn_pre" value="Pre">
		<ul id="gal_list">
			<li class="selected"><img class="img" id="img_1" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_2" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/84/recycle-recycling-ecology-16000884-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_3" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/80/stay-trail-walk-16000880-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_4" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/68/water-building-landmark-16000868-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_5" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/67/watch-tower-watchtower-16000867-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_6" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_7" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/77/plane-seaplane-water-16000877-o.jpg" alt="test" /></li>
			<li><img class="img" id="img_8" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
		</ul>
	</div>
    </div>
</div>
<?php include_once("footer.php"); ?>
</body>
</html>	
	