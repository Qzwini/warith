<?php


//export.php  
include('db.php');
$output = '';

$query = "SELECT * FROM links";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
   <table class="table" style="
   border: 1px solid black;
   
   " bordered="1">  
                    <tr style="
                    border: 1px solid black;
                 
                    
                    ">  
                         <th>الاسم</th>  
                         <th>الجنس</th>  
                         <th>  العمر </th>
                         <th>الرقم </th>   
                         <th> مواقع التواصل </th>
                         <th>المحافضه </th>  
                         <th>المؤهل العلمي                         </th>  
                         <th> العمل الحالي                         </th>
                         <th>الهواية </th>   
                         <th> الانتماء السياسي
                         </th>
                         <th>ماذا تقترح بشأن تمكين الشباب العراقي؟
                         </th>
                         <th>الى ماذا تطمح من انتمائك الى حركة وعي الوطنية؟ 
                         </th>
                         <th>الملاحظات
                         </th>
         
                  
                    </tr>
  ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
    <tr style="
    border: 1px solid black;
 
    
    ">  
                         <td>' . $row["name"] . '</td>  
                         <td>' . $row["gender"] . '</td>  
                         <td>' . $row["age"] . '</td>  
                         <td>' . $row["number"] . '</td>  
                         <td>' . $row["social"] . '</td>
                         <td>' . $row["city"] . '</td>  
                         <td>' . $row["gradute"] . '</td>  
                         <td>' . $row["position"] . '</td>  
                         <td>' . $row["nationality"] . '</td>  
                         <td>' . $row["Political"] . '</td>
                         <td>' . $row["des1"] . '</td>  
                         <td>' . $row["des2"] . '</td>  
                         <td>' . $row["des3"] . '</td>

                    </tr>
   ';
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=data.xls');
    echo $output;
}
