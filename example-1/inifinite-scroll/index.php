<?php
require_once( '../include/config.php');
$pageId="ajax";
?>
<!doctype html>
<html lang="en-US">
<head>
    <?php require_once("../include/link_script.php"); ?>
    <script type="text/javascript" src="<?php echo PATH_DOMAIN; ?>js/jquery.infinitescroll.js"></script>
    <title>下拉分頁</title>
</head>
<body>

    <?php require_once("../header.php"); ?>
    <div class="container">

        <div class="page-header"></div>

        <div class="panel panel-info">
            <table class="table table-bordered" id="infinite-scroll">
                <?php for($i=0;$i<80;$i++){ ?>
                <tr>
                    <td><?php echo $i+1; ?></td>
                    <td>first<?php echo $i+1; ?></td>
                    <td>second<?php echo $i+1; ?></td>
                    <td>finish<?php echo $i+1; ?></td>
                </tr>
                <?php } ?>
            </table>
            <a id="next" href="index2.html">next page?</a>
        </div>
    </div>
    <?php require_once("../footer.php"); ?>
</body>
</html>
<script type="text/javascript">
    $(function() {
        $('#infinite-scroll').infinitescroll({
            navSelector: "#next:last",
            nextSelector: "#next:last",
            itemSelector: "#infinite-scroll",
            debug: true,
            dataType	 	: 'json',
            // behavior		: 'twitter',
            appendCallback	: false, // USE FOR PREPENDING
            maxPage: 6,
//            pathParse: function(index) {
//                console.log(index);
//                return "process-scroll.php?method=GET&page=" + index;
//            }
            path: function(index) {
                return "process-scroll.php?method=GET&page=" + index;
            }
            // appendCallback	: false, // USE FOR PREPENDING
        },
            function( response ) {
//            var jsonData = response.results;
                console.log(response);

                $theCntr = $("#infinite-scroll tbody");
                if(response.status == '100')
                {
                    $theCntr.append(response.html);
                }

//            var newElements = "";
//            //var newItems = new Array();
//            for(var i=0;i<jsonData.length;i++) {
//                var item = $(_renderItem(jsonData[i]));
//                //item.css({ opacity: 0 });
//                $theCntr.append(item);
//                //newItems.push(item.attr('id'));
//            }
            //_addMasonryItem(newItems);
        });

//            , function(newElements, data, url){
//            console.log(newElements);
//            console.log(data);
//            console.log(url);
//            // used for prepending data
//            // $(newElements).css('background-color','#ffef00');
//            // $(this).prepend(newElements);
//        });
//        $.ajax({
//                url: URLs,
//                data: $('#sentToBack').serialize(),
//                type:"POST",
//                dataType:'text',
//                 success: function(msg){
//                   alert(thrownError);
//                      alert(msg);
//                  },
//            error:function(xhr, ajaxOptions, thrownError){
//                alert(xhr.status);
//            }
        });
</script>
