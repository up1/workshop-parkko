<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Parkko</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <style media="screen">
      html, body {
         /*background-color: #F73897;*/
      }
   </style>
</head>
<body>
   <div class="container">
      <header>
         <h1>Input</h1>
      </header>
      <form action="printslipt.php" method="GET">
         <div class="row">
            <div class="form-group">
               <label>ทะเบียนรถ</label>
               <input type="text" class="form-control" name="car_label" value="">
            </div>
         </div>
         <div class="row">
            <div class="form-group">
               <label>จังหวัด</label>
               <input type="text" class="form-control" name="provice" value="">
            </div>
         </div>
         <div class="row">
            <input type="submit" class="btn btn-success" value="submit">
         </div>
      </form>
   </div>
</body>
</html>
