<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Title of the document</title>
</head>
<?php
include ("classes/Calculate.php");
if(isset($_POST["txChange"]))
{
  //echo $_POST["txChange"]."<br>";
  $clsCal = new Calculate();
  $result = $clsCal->getChange( $_POST["txChange"]);
  //echo "500 : " . $result["bank500"] . ", 100 : " . $result["bank100"] . ", 50 : " . $result["bank50"] . ", 20 : ".$result["bank20"].", 10 : ".$result["bank10"];
}
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
  <form name="frmChange" action="calculate.php?total=<?php echo $_GET["total"];?>" method="post">
  <table width="500">
  	<tr>
  		<td>จำนวนเงิน</td>
  		<td><input type="text" name="txTotal" value="<?php echo $_GET["total"]; ?>" id = "txTotal" readonly></td>
  	</tr>
  	<tr>
  		<td>รับเงินมา</td>
  		<td><input type="text" name="txReceive" id = "txReceive" onchange="calChange();" value ="<?php if(isset($_POST["txReceive"])) echo $_POST["txReceive"];?>"></td>
  	</tr>
  	<tr>
  		<td>เงินทอน</td>
  		<td><input type="text" name="txChange" id="txChange" value ="<?php if(isset($_POST["txChange"])) echo $_POST["txChange"];?>" readonly></td>
  	</tr>
  	<tr>
  		<td colspan="2" align="center"><button type="submit" id="bnSubmit" >Submit</button></td>
  	</tr>
  	<tr colspan="2">
  		<td>
  			<table width="100%">
  				<tr>
  					<td>แบงค์ 500</td>
  					<td> <label id="bank500"><?php if( isset($result["bank500"])) echo $result["bank500"]; else echo "-";?></label> ใบ</td>
  				</tr>
  				<tr>
  					<td>แบงค์ 100</td>
  					<td> <label id="bank100"><?php if( isset($result["bank100"])) echo $result["bank100"]; else echo "-";?></label> ใบ</td>
  				</tr>
  				<tr>
  					<td>แบงค์ 50</td>
  					<td> <label id="bank50"><?php if( isset($result["bank50"])) echo $result["bank50"]; else echo "-";?></label> ใบ</td>
  				</tr>
  				<tr>
  					<td>แบงค์ 20</td>
  					<td> <label id="bank20"><?php if( isset($result["bank20"])) echo $result["bank20"]; else echo "-";?></label> ใบ</td>
  				</tr>
  				<tr>
  					<td>แบงค์ 10</td>
  					<td> <label id="bank10"><?php if( isset($result["bank10"])) echo $result["bank10"]; else echo "-";?></label> ใบ</td>
  				</tr>
  			</table>
  		</td>
  	</tr>
  </table>
  </form>
</body>

</html>
