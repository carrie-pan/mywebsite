<?php
//var_dump($_REQUEST);
//echo $html      = '';
//echo $per_page  = 80;
//echo $limit     = 80 * ($_REQUEST['page'] - 1);
//echo $page      = $_REQUEST['page'];
//echo $i         = $_REQUEST['page'] * $per_page;
if($_REQUEST['method'] == 'GET' && isset($_REQUEST['page']))
{

//   $html      = '<table>';
   $html      = '';
   $per_page  = 80;
   $page      = $_REQUEST['page'];
   $limit     = $per_page * $page;
   $i         = $per_page * ($page-1);
   for($i;$i<$limit;$i++)
   {
      $html .= '
           <tr>
               <td>'.($i+1).'</td>
               <td>first'.($i+1).'</td>
               <td>second'.($i+1).'</td>
               <td>finish'.($i+1). '</td>
           </tr>
           ';

//       echo json_encode($json);
   }

    $json = array(
        'status' => '100',
        'html'  => $html
    );
    // $html      .= '</table>';
    echo json_encode($json);
}
else
{
    $json = array(
        'status' => '200',
        'html'  => 'NO'
    );
    echo json_encode($json);
}