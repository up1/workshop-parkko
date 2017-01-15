<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Title of the document</title>
</head>
<?php
include ("classes/Calculate.php");
/*if($_POST["txChange"] != "")
{

}*/
?>
<script >
function calChange()
{

	var total = document.getElementById("txTotal").value;
	var receive  = document.getElementById("txReceive").value;

	var change = receive - total;
	document.getElementById("txChange").value = change;
}

</script>
<body>
  <form name="frmChange" action="calculate.php" method="post">
  <table width="500">
  	<tr>
  		<td>จำนวนเงิน</td>
  		<td><input type="text" name="txTotal" value="<?php echo $_GET["total"]; ?>" id = "txTotal" readonly></td>
  	</tr>
  	<tr>
  		<td>รับเงินมา</td>
  		<td><input type="text" name="txReceive" id = "txReceive" onchange="calChange();"></td>
  	</tr>
  	<tr>
  		<td>เงินทอน</td>
  		<td><input type="text" name="txChange" id="txChange"></td>
  	</tr>
  	<tr>
  		<td colspan="2" align="center"><button type="button" id="bnSubmit">Submit</button></td>
  	</tr>
  	<tr colspan="2">
  		<td>
  			<table width="100%">
  				<tr>
  					<td>แบงค์ 500</td>
  					<td> <label id="bank500">10</label></td>
  				</tr>
  				<tr>
  					<td>แบงค์ 100</td>
  					<td> <label id="bank100"></label></td>
  				</tr>
  				<tr>
  					<td>แบงค์ 50</td>
  					<td> <label id="bank50"></label></td>
  				</tr>
  				<tr>
  					<td>แบงค์ 20</td>
  					<td> <label id="bank20"></label></td>
  				</tr>
  				<tr>
  					<td>แบงค์ 10</td>
  					<td> <label id="bank10"></label></td>
  				</tr>
  			</table>
  		</td>
  	</tr>
  </table>
  </form>
</body>

</html>
