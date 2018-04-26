<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hsiu
 * Date: 2013/11/16
 * Time: 下午 4:39
 * To change this template use File | Settings | File Templates.
 */
?>
<div id="copyright" class="container">
    <p>Website Ower <a href="mailto:i7807@yahoo.com.tw">Hsiu Pan</a> |
       Photos by <a href="http://fotogrph.com/">Fotogrph</a> |
       Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.
    </p>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        <?php
        if(isset($pageId)){
            echo '$("#'.$pageId.'").attr("id", "hiLight");';
        }
        ?>
    });
</script>