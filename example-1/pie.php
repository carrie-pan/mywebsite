<?php
require_once("include/config.php");
$pageId="chart";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("include/link_script.php"); ?>
        <script src="js/Chart.min.js"></script>
        <script>
            "use strict";
            $(document).ready(function(){
                var $pieData = [
                    {
                        value: 300,
                        color:"#F7464A",
                        highlight: "#FF5A5E",
                        label: "Red"
                    },
                    {
                        value: 50,
                        color: "#46BFBD",
                        highlight: "#5AD3D1",
                        label: "Green"
                    },
                    {
                        value: 100,
                        color: "#FDB45C",
                        highlight: "#FFC870",
                        label: "Yellow"
                    },
                    {
                        value: 40,
                        color: "#949FB1",
                        highlight: "#A8B3C5",
                        label: "Grey"
                    },
                    {
                        value: 120,
                        color: "#4D5360",
                        highlight: "#616774",
                        label: "Dark Grey"
                    }

                ];

                // Get context with jQuery - using jQuery's .get() method.
                var ctx = $("#chart-area").get(0).getContext("2d");
                var ctx2 = $("#chart-area2").get(0).getContext("2d");
                var myDoughnutChart = new Chart(ctx2).Doughnut($pieData);
                var myPieChart = new Chart(ctx).Pie($pieData);

                $('input[type="submit"]').click(function(){
                    var $cnt = 0;
                    var $obj = [];

                    $('#pie-value tr').each(function($n) {

                        var val_temp = $(this).find('input.value').val();
                        var $obj_temp = {};
                        var label = $(this).find('input.title').val();
                        var color = $(this).find('input.color').val();
                        if(val_temp != '')
                        {
                            var val = parseInt( $(this).find('input.value').val(),10 );
                        }
                        else
                        {
                            var val = '';
                        }

                        var highlight = '#999999';
                        if( val != undefined && color != undefined && label != undefined )
                        {

                            if( val == '' || color == '' || label == '' )
                            {
                                $cnt++;
                                $('#pie-value').prepend('<span class="label label-danger">請填寫所有欄位</span>');
                                $('.label-danger').fadeOut(5000);
                            }

                            $obj_temp = {
                                'label' : label,
                                'color' : color,
                                'value' : val,
                                'highlight' : highlight
                            };
                            $obj.push($obj_temp);

                        }


                    });

                    if($cnt == 0)
                    {
                        var $caption = $('#caption').val();
                        $('.label-primary').text( $caption );

                        $('#chart-area').remove();
                        $('.jumbotron').append(' <canvas id="chart-area" width="300" height="300" style="width: 300px; height: 300px;"></canvas>');

                        var ctx = $("#chart-area").get(0).getContext("2d");
                        var myPieChart = new Chart(ctx).Pie($obj);
                        // console.log( $obj );
                    }

                });

            });

        </script>
    </head>
    <body>
    <?php include_once("header.php"); ?>
    <div class="container">
        <div class="page-header"></div>
        <div class="panel panel-info">
            <div class="panel-heading">
                Chart - JS - 圓餅圖
            </div>
            <div class="panel-body">
                <table id="pie-value" class="table table-condensed">
                    <caption>圓餅圖標題 - 測試: <input id="caption" value="測試"></caption>
                    <tr>
                        <th>Title</th>
                        <th>Value</th>
                        <th>Color</th>
                    </tr>
                    <tr>
                        <td><input class="title" value="TEST1" /></td>
                        <td><input class="value" value="100" /></td>
                        <td><input class="color" value="#FDB45C" /></td>
                    </tr>
                    <tr>
                        <td><input class="title" value="TEST2" /></td>
                        <td><input class="value" value="40" /></td>
                        <td><input class="color" value="#4D5360" /></td>
                    </tr>
                    <tr>
                        <td><input class="title" value="TEST3" /></td>
                        <td><input class="value" value="120" /></td>
                        <td><input class="color" value="#F7464A" /></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>
                            <input class="btn btn-success" type="submit" value="Submit">
                        </td>
                        <td></td>
                    </tr>
                </table>
                <span class="label label-primary">預設圓餅圖</span>
                <div class="jumbotron">
                    <canvas id="chart-area" width="300" height="300" style="width: 300px; height: 300px;">
                    </canvas>
                    <canvas id="chart-area2" width="300" height="300" style="width: 300px; height: 300px;">
                    </canvas>
                </div>
            </div>

        </div>
    </div>

    <?php include_once("footer.php"); ?>
  </body>
</html>