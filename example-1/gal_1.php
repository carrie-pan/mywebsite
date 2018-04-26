<?php 
require_once("include/config.php"); 
$pageId="home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("include/link_script.php"); ?>
    <style>
        body {
		font-size: 14px;
	     }
			/*Button Style*/
			.img_btn{
				float:left;
				height:auto;
				font:76%/150% "Lucida Grande", Geneva, 
				Verdana, Arial, Helvetica, sans-serif;
				width:10em;
				text-align:center;
				white-space:nowrap;
                                cursor:pointer;
			}
			/*Button Arrow Styles*/
			.arrows {
				font-size:90%;
				margin:0.2em;
			}
			/*Button link styles*/
			.img_btn a:link, .img_btn a:visited {
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
			.img_btn a:hover {
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
				height: 100px;
				width: 960px;
				list-style: none;
			}
			ul#gal_list li
			{
				display: inline;
				width: 100px;
				height: 100px;
				float: left;
				margin-right: 100px;
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.s_img
			{
				width: 100px;
				height: 100px;
                                cursor:pointer;
			}
			img.selected
			{
                padding:1px;
                border:1px solid #000000;
			}
			div#gal_block
			{
				margin: 5px 0px 50px 50px;
				height: 300px;
			}
			div#display_block
			{
				margin-left: 200px;
			}
			div#btn_block
			{
                                margin-left: 300px;
				height: 50px;
				position: relative;
			}
    </style>
    <script type="text/javascript" src="js/gal_1.js"></script>
</head>
<body>
<?php include_once("header.php"); ?>
    <div class="container">
        <div class="page-header"></div>
        <div class="panel panel-info">
            <div class="panel-heading">
                圖片來源: <a href="http://www.everystockphoto.com/">www.everystockphoto.com</a>
            </div>
            <div class="panel-body">
            
                <div id="btn_block">
                    <input type="button" class="img_btn" id="btn_next" value="Next">
                    <input type="button" class="img_btn" id="btn_pre" value="Pre">
                </div>
                <div id="gal_block">
                    <ul id="gal_list">
                        <li><img class="s_img selected" id="img_1" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_2" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/84/recycle-recycling-ecology-16000884-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_3" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/80/stay-trail-walk-16000880-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_4" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/68/water-building-landmark-16000868-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_5" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/67/watch-tower-watchtower-16000867-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_6" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_7" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/77/plane-seaplane-water-16000877-o.jpg" alt="test" /></li>
                        <li><img class="s_img" id="img_8" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/78/wood-gathering-gatherer-16000878-o.jpg" alt="test" /></li>
                    </ul>
                </div>
                <div id="display_block">
                    <img class="img" id="large_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" />
                </div>
                
            </div>
            
        </div>
    </div>
<?php include_once("footer.php"); ?>
</body>
</html>	