<?php 
require_once("include/config.php");
$pageId="home";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once("include/link_script.php"); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo PATH_DOMAIN; ?>css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <?php include_once("header.php"); ?>
    <div class="container">

        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Hello, I am Carrie!</h1>
                  <p>Welcome to my site. If you want to contact me, please try </p>
                  <p><a class="btn btn-lg btn-primary" href="mailto:i7807@yahoo.com.tw" role="button">Send Mail</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>這是平常測試跟練習用的網站</h1>
                  <p>一些簡單的php ajax 的範例</p>
                  <p>&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->

    </div>

    <?php include_once("footer.php"); ?>
  </body>
</html>