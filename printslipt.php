<?php
$data = array(
   array(
      'car_label' => "สฬ 5420",
      'province' => "กทม",
      'time' => "4.30",
      'price' => 500,
      'first_hr' => 1,
      'three_hr' => 1,
   ),
   array(
      'car_label' => "กข 1432",
      'province' => "ลำปาง",
      'time' => "14",
      'price' => 210,
      'first_hr' => true,
   ),
   array(
      'car_label' => "อง 1150",
      'province' => "กทม",
      'time' => "15",
      'price' => 1150,
      'first_hr' => true,
   ),
);

$label = (isset($_GET['car_label']))? trim($_GET['car_label']): "";
$provice = (isset($_GET['provice']))? trim($_GET['provice']): "";

$result = array();
foreach ($data as $key => $value) {
   if ($value['car_label'] == $label && $value['province'] == $provice) {
      $result = $value;
   }
}
// print_r($result);
if (!$result) {
   echo "Not Found";
   exit();
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Parkko</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <style media="screen">
      html, body {
         background-color: #F73897;
      }
   </style>
</head>
<body>
   <div class="container">
      <div id="print_area">
         <header>
            <h1>รายละเอียด</h1>
         </header>
         <table class="table table-bordered">
            <tr>
               <td>เลขทะเบียนรถ : </td>
               <td><?php echo $result['car_label'] ?></td>
            </tr>
            <tr>
               <td>จังหวัด : </td>
               <td><?php echo $result['province'] ?></td>
            </tr>
         </table>
         <header>
            <h1>รายละเอียดเพิ่มเติม</h1>
         </header>
         <table class="table table-bordered">
            <tr>
               <th>รายละเอียด</th>
               <th>จำนวนชั่วโมง</th>
               <th>ค่าใช้จ่าย</th>
            </tr>
            <tr>
               <td>1 ชั่วโมงแรก</td>
               <td>1</td>
               <td>Free</td>
            </tr>
            <tr>
               <td>3 ชั่วโมงแรก</td>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td>4 ชั่วโมง ขึ้นไป</td>
               <td></td>
               <td></td>
            </tr>
         </table>
      </div>
      <button type="button" class="btn btn-primary" onclick="PrintElem('print_area')">Print</button>
   </div>
   <script type="text/javascript">
   function PrintElem(elem)
   {
      var mywindow = window.open('', 'PRINT', 'height=400,width=600');
      mywindow.document.write('<html><head><title>' + document.title  + '</title>');

      mywindow.document.write('</head><body >');
      mywindow.document.write(document.getElementById(elem).innerHTML);
      mywindow.document.write('</body></html>');

      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/

      mywindow.print();
      mywindow.close();

      return true;
   }
   </script>
</body>
</html>