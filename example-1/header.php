<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
 
        </div>
        <!-- High light use class active -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home">
                <a href="<?php echo PATH_DOMAIN; ?>">Home</a>
            </li>
            <li id="ajax" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    AJAX & PHP 
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo PATH_DOMAIN; ?>jquery-sortable/index.php">Sortable</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>ajax-update/index.php">AJAX Update</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>autocompelete/index.php">Autocompelete</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>test_map.php">Test Map</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>test_ip.php">IP 兩種抓法</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>test_cal_1.php">計算</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>intime/gold_view.php">黃金價錢即時更新</a></li>
                    <!--
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                    -->
                </ul>
            </li>
            <li id="gal" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    畫廊 
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo PATH_DOMAIN; ?>gal_1.php">畫廊-1</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>gal.php">畫廊-2</a></li>
                </ul>
            </li>
            <li id="chart" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    CHART 
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo PATH_DOMAIN; ?>pie.php">圓餅圖</a></li>
                    <li><a href="<?php echo PATH_DOMAIN; ?>gal.php">XXX</a></li>
                </ul>
            </li>
          </ul>
          <!-- navbar right side 
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
          -->
        </div><!--/.nav-collapse -->
    </div>
</nav> 