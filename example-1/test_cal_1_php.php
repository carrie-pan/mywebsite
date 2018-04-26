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
                <ol>
                    <li>任意一個整數，假設是n</li>

                   <li>如果n不是1，且此數是奇數，則做運算，使n = 3n + 1。</li>

                   <li>如果n不是1，且此數是偶數，則做運算，使n = n / 2。</li>

                   <li>步驟2及3計算出的 n 如果是奇數，重覆步驟2，如果 n 是偶數，重覆步驟3，直到 n 為1。</li>

                   <li>計算整數 n ，在步驟 1 至 4 ，n = 3n +1 及 n = n/2 的運算次數</li>
                </ol>
            </div>
            <div class="panel-body">
                <textarea class="form-control" style="width: 850px; height: 450px;" readonly="readonly">
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
                    
                    $n = mt_rand(1,9);
                    if($n == 1)
                    {
                        echo '原始數字(不須計算): '.$n;
                        exit();
                    }
                    
                    $mod = mod_num($n);
                    echo '原始數字: '.$n."<br/>";
                    go_loop($n,$mod);
                </textarea>
            </div>
        </div>
    </div>
        
<?php include_once("footer.php"); ?>
</body>
</html>