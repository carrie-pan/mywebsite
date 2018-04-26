<html>
<head>
    <title>哪一間餐廳</title>
</head>
<body>
    <form action="random.php" method="post" >
        <h3>請用逗點隔開每一間餐廳</h3>
        <textarea name="restaurant" rows="4" cols="100">
            王品, 夏慕尼, 原燒, 西堤, 聚, 石二鍋,
            舒果, 大楊梅鵝莊, 饗食天堂
        </textarea>
        <input type="hidden" name="vals" value="GO" maxlength="600"><br/>
        <input type="submit" value="選一間餐廳">
    </form>
</body>
</html>


<?php
if( !empty($_POST['restaurant']) && isset($_POST['restaurant']))
{
$text = trim($_POST['restaurant'], ',');
$restaurant_arr = explode(",", $text);
// var_dump( $restaurant_arr );
/*
    $restaurant_arr = array( '1' =>'王品',
                            '2' =>'夏慕尼',
                            '3' =>'原燒',
                            '4' =>'西堤',
                            '5' =>'聚',
                            '6' =>'石二鍋',
                            '7' =>'舒果',
                            '8' =>'大楊梅鵝莊',
                            '9' =>'饗食天堂',
                        );
*/
    $max = count($restaurant_arr) -1;
    $rand = mt_rand(0 , $max);

    echo ' 選到的是:    '.$restaurant_arr[$rand];
}

?>