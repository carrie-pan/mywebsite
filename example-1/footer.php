<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hsiu Pan
 * Date: 2016/07/17
 * Time: 下午 10:02
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="footer">
    <span>
        <p>
            Website Owner <a href="mailto:i7807@yahoo.com.tw">Hsiu Pan</a> |
            Use <a href="http://getbootstrap.com/" rel="nofollow" target="_blank">Bootstrap</a>.
        </p>
    </span>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        <?php
        if(isset($pageId)){
            echo '$("#'.$pageId.'").addClass("active");';
        }
        ?>
    });
</script>