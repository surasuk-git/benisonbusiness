<?php
ob_start();
session_start();
include 'connection.php';
?>
	
<!DOCTYPE html>
<html>
<head>
<title>HOME - Facoty System Benison Business Co., Ltd.</title>
<link rel="shortcut icon" href="icon.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="time_h.js"></script>
<script type="text/javascript" src="time_m.js"></script>
<script type="text/javascript" src="time_s.js"></script>
<style type="text/css">
body{background-color: #eee;}
table.show1 {
    background-color: #FFFFFF;
    border-collapse: collapse;
    border-spacing: 0;
    border: 1px solid #ddd;
    font-family: 'Sarabun', sans-serif;
    width: 100%;
	margin:10px;
	padding:5px;
	font-size:40px;
}
table.show2 {
    background-color: #FFFFFF;
    border-collapse: collapse;
    border-spacing: 0;
    border: 2px solid #ddd;
    font-family: 'Sarabun', sans-serif;
    width: 100%;
	font-size:1.5em;
}

table.day {
    font-family: 'Sarabun', sans-serif;
    width: 100%;
    font-size: 60px;
    margin:10px 0px;
    
}
table.time {
    font-family: 'Sarabun', sans-serif;
    width: 100%;
    font-size: 60px;
    margin:10px 0px;
    
}
td.day {
    text-align: center;
    background-color: #02A550;
    border: 0px solid #000;
    border-radius: 8px;
}
td.time {
    text-align: center;
    background-color: #fff;
    border: 0px solid #000;
    border-radius: 8px;
}
p.day {
    text-align: center;
    color: #02A550;
    border: 3px solid #000;
    border-radius: 8px;
    background-color: #fff;
}
th, td {
    border: 1px solid #ddd;
    text-align: center;
    padding: 5px;
    font-size: 1.3em;
    letter-spacing: -1.5px;  
}
tr:nth-child(3).data{
  background-color: #02A550;
  color: #FFFFFF;
}
tr.agv{
  background-color: red;
  color: #FFFFFF;
}

th.quan{
    border: 2px solid #ddd;
    text-align: right;
    font-size: 20px ;
    font-family: 'Sarabun', sans-serif;
    background-color: #FFFFFF;
    width: 85%;
	
}
td.quan{
      border-left: 3px solid #ddd;
      text-align: right;
      font-size: 50px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.quanY{
      background-color: #FFFFCC;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 50px;
	  font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
	  
  }
  td.quanM{
      background-color: #FFDDDD;
      border: 3px solid #ddd;
      text-align: right;
	  font-size: 50px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
	  
  }
  td.para{
      border: 3px solid #ddd;
      text-align: left;
      font-size: 30px;
      font-family: 'Sarabun', sans-serif;
      background-color:#02A550;
      color: white;
      line-height: 85px ; 
      
  }
  td.para2{
      border-left: 0px solid #ddd;
      text-align: left;
      font-size: 30px;
      font-family: 'Sarabun', sans-serif;
      background-color:#fff;
      color: #000;
      line-height: 85px ; 
      
  }

h3{font-family: 'Sarabun', sans-serif;text-align: center;}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

</style>

</head>

<body>
<div class="container-fluid">
  <div class="row" style="background-color:#02A550 ;">
    <div class="col-xs-2 col-md-2">
    </div>
    <div class="col-xs-2 col-md-2">
      <img src="B-Logo.png" style="width:75%;padding:10px;">
    </div>
	
    <div class="col-xs-3 col-md-3" style="margin-right:3%;">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <h3>
              วัน
            </h3>
             <table class="day">
              <td class="day">
                <p class="day">
                  <?php
				  echo date('d');
				  ?>  
                </p>
              </td>
            </table>
          </div>
          <div class="col-xs-4 col-md-4">
            <h3>
              เดือน
            </h3>
             <table class="day">
               <td class="day">
                <p class="day">
                   <?php
				  echo date('m');
				  ?>  
                </p>
              </td>
            </table>
          </div>
          <div class="col-xs-4 col-md-4">
            <h3>
              ปี
            </h3>
             <table class="day">
               <td class="day">
                <p class="day">
                 <?php
				  echo date('y');
				  ?>
                </p>
              </td>
            </table>
          </div>
      </div>
    </div>
	
    <div class="col-xs-3 col-md-3" style="background-color: white;">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <h3>
              ชั่วโมง
            </h3>
             <table class="time">
              <td class="time">
                <p class="day" id="time_h">
                </p>
              </td>
            </table>
          </div>

          <div class="col-xs-4 col-md-4">
            <h3>
              นาที
            </h3>
             <table class="time">
              <td class="time">
                <p class="day" id="time_m">
                </p>
              </td>
            </table>
          </div>
          <div class="col-xs-4 col-md-4">
            <h3>
              วินาที
            </h3>
             <table class="time">
              <td class="time">
                <p class="day" id="time_s">
                </p>
              </td>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid mySlides">
	<div class="row">
			<table class="show1" style="margin:0;">
				<tr>
				<th colspan="2" align="center" bgcolor="#FFFFFF"><font color="#000000">SD-75 (Slim Duct)</font></</td>
				</tr>
				<tr>
					<th style="background-color:#9966CC;color:#fff;">HARU</th>
				</tr>
			</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="2" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">จำนวนเส้น</td>
					<td align="center" bgcolor="#FFFFFF">กล่อง</td>
				</tr>
					<?php
					@$AddDate = $_GET['AddDate'];
					@$ProductID = $_GET['ProductID'];
					
					$sql = "SELECT * FROM tblist WHERE ProductID = 8 ORDER BY AddDate DESC LIMIT 10 ";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$boxQuantity = floor($row['Quantity'] / 5); //คำนวณจำนวนทั้งหมดเป็นกล่อง
							@$totalLineTb = $totalLineTb + $row['Quantity'];
							@$totalBoxTb  = floor($totalBoxTb + $boxQuantity);
							$i=1;
							$i++;
							
							echo "<tr class=data>";
							echo "<td>".$row["AddDate"]."</td>"; 
							echo "<td>".number_format($row["Quantity"])."</td>";
							echo "<td>{$boxQuantity}</td>";      
							echo "<tr>";
							
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					?>
				<tr>
				
            <?php
			$sql2 = "SELECT COUNT(AddID) as num FROM tblist WHERE ProductID = 8";
			
			$result = $conn->query($sql2);
			while($row = $result->fetch_assoc()) {
			$sumRecord = $row['num'];}
			
			
            $avgLine = floor($totalLineTb /10) ;
            $avgBox = floor($totalBoxTb / 10) ;
            echo "<tr class=agv>";
            echo "<td>เฉลี่ยการผลิต</td>";
            echo "<td>".number_format($avgLine)."</td>";
            echo "<td>".number_format($avgBox)."</td>";
            ?>
        
			</table>
		</div>
		
		<div class="col-xs-8 col-md-8">
			<?php
			$sql = "SELECT * FROM tblist WHERE ProductID = 8 ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			@$totalLine = $totalLine + $row['Quantity'];
			@$totalBox =  floor($totalLine / $box);
			$box = 5 ;
			}
			
			$thisM = date('m') ;
			$sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 8";
			$result = $conn->query($sql3);
			while($row = $result->fetch_assoc()) {
			$TotalMonth = $row['TotalMonth'];
			}
			
			
			
			$TotalMonthM = $TotalMonth / $box ;
			$goalLineY = 900000;
			$goalBoxY = $goalLineY / $box ;
			$goalLineM = $goalLineY / 10 ;
			$goalBoxM = $goalLineM / $box ;
			$resultLineY = $goalLineY - $totalLine ;
			$resultBoxY = $goalBoxY - $totalBox ;
			$resultLineM = $goalLineM - $TotalMonth ;
			$resultBoxM = $goalBoxM - $TotalMonthM ;
			$today = date('d') ;
			$lastday = date('t',strtotime('today'));
			$resultDay = date($lastday - $today) ;
			$agvLinePDay = $resultBoxM / $resultDay ;
			
			?>
			  <table border="0" class="show2">
				<tr>
					<th rowspan="2"></th>
					<th colspan="2">ปี</th>
					<th colspan="2">เดือน</th>
				</tr>
				<tr>
					<th>จำนวนเส้น</th>
					<th>กล่อง</th>
					<th>จำนวนเส้น</th>
					<th>กล่อง</th>
				</tr>
				<tr>
					<td class="para"><p>เป้าหมายการผลิต</p></td>
					<td class="quanY"><p><?php echo number_format("$goalLineY")?></p></td>
					<td class="quanY"><p><?php echo number_format("$goalBoxY")?></p></td>
					<td class="quanM"><p><?php echo number_format("$goalLineM")?></p></td>
					<td class="quanM"><p><?php echo number_format("$goalBoxM")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
					<td class="quanY"><p><?php echo number_format("$totalLine")?></p></td>
					<td class="quanY"><p><?php echo number_format("$totalBox")?></p></td>
					<td class="quanM"><p><?php echo number_format("$TotalMonth")?></p></td>
					<td class="quanM"><p><?php echo number_format("$TotalMonthM")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
					<td class="quanY"><p><?php echo number_format("$resultLineY")?></p></td>
					<td class="quanY"><p><?php echo number_format("$resultBoxY")?></p></td>
					<td class="quanM"><p><?php echo number_format("$resultLineM")?></p></td>
					<td class="quanM"><p><?php echo number_format("$resultBoxM")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>จำนวนวันผลิตคงเหลือ</p></td>
					<td class="quan" colspan="3"><p><?php echo number_format("$resultDay")?></p></td>
					<td class="para2"><p>วัน</p></td>
				</tr>
				<tr>
					<td class="para"><p>ยอดเฉลี่ยคงเหลือต่อวัน</p></td>
					<td class="quan" colspan="3"><p><?php echo number_format("$agvLinePDay")?></p></td>
					<td class="para2"><p>กล่อง</p></td>
				</tr>
			</table>
		</div>	
	</div>
</div>


<div class="container-fluid mySlides ">
	<div class="row">
			<table class="show1" style="margin:0;">
				<tr>
				<th colspan="2" align="center" bgcolor="#FFFFFF"><font color="#000000">SD-75 (Slim Duct)</font></</td>
				</tr>
				<tr>
					<th width="50%" style="background-color:#000099;color:#fff;">MOMO</th>
				</tr>
			</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="2" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">จำนวนเส้น</td>
					<td align="center" bgcolor="#FFFFFF">กล่อง</td>
				</tr>
					<?php
					@$AddDate = $_GET['AddDate'];
					@$ProductID = $_GET['ProductID'];
					
					$sql = "SELECT * FROM tblist WHERE ProductID = 1 ORDER BY AddDate DESC LIMIT 10";
					$result = $conn->query($sql);
					$sql2 = "SELECT COUNT(AddID) as num FROM tblist WHERE ProductID = 1";
					$result2 = $conn->query($sql2);
					while($row = $result2->fetch_assoc()) {
					$sumRecord = $row['num'];}
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							$boxQuantity = floor($row['Quantity'] / 5); //คำนวณจำนวนทั้งหมดเป็ยกล่อง
							@$totalLineTb = $totalLineTb + $row['Quantity'];
							@$totalBoxTb  = floor($totalBoxTb + $boxQuantity);
							$i=1;
							$i++;
							$avgLine = floor($totalLineTb /10) ;
							$avgBox = floor($totalBoxTb / 10) ;
							echo "<tr class=data>";
							echo "<td>".$row["AddDate"]."</td>"; 
							echo "<td>".number_format($row["Quantity"])."</td>";
							echo "<td>{$boxQuantity}</td>";      
							echo "<tr>";
							echo "<tr class=agv>";
							echo "<td>เฉลี่ยการผลิต</td>";
							echo "<td>".number_format($avgLine)."</td>";
							echo "<td>".number_format($avgBox)."</td>";
						  }
					  } else {
						  echo "<td colspan='3'>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					?>
				<tr>
			</table>
		</div>
		
		<div class="col-xs-8 col-md-8">
			<?php
			$sql = "SELECT * FROM tblist WHERE ProductID = 1";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			@$totalLine = $totalLine + $row['Quantity'];
			@$totalBox =  floor($totalLine / $box);
			$box = 5 ;
			}
			$thisM = date('m') ;
			$sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM'";
			$result = $conn->query($sql3);
			while($row = $result->fetch_assoc()) {
			$TotalMonth = $row['TotalMonth'];
			}
			
			$TotalMonthM = $TotalMonth / $box ;
			$goalLineY = 900000;
			$goalBoxY = $goalLineY / $box ;
			$goalLineM = $goalLineY / 10 ;
			$goalBoxM = $goalLineM / $box ;
			$resultLineY = $goalLineY - $totalLine ;
			$resultBoxY = $goalBoxY - $totalBox ;
			$resultLineM = $goalLineM - $TotalMonth ;
			$resultBoxM = $goalBoxM - $TotalMonthM ;
			$today = date('d') ;
			$lastday = date('t',strtotime('today'));
			$resultDay = date($lastday - $today) ;
			$agvLinePDay = $resultBoxM / $resultDay ;
			?>
			
			  <table border="0" class="show2">
				<tr>
					<th rowspan="2"></th>
					<th colspan="2">ปี</th>
					<th colspan="2">เดือน</th>
				</tr>
				<tr>
					<th>จำนวนเส้น</th>
					<th>กล่อง</th>
					<th>จำนวนเส้น</th>
					<th>กล่อง</th>
				</tr>
				<tr>
					<td class="para"><p>เป้าหมายการผลิต</p></td>
					<td class="quanY"><p><?php echo number_format("$goalLineY")?></p></td>
					<td class="quanY"><p><?php echo number_format("$goalBoxY")?></p></td>
					<td class="quanM"><p><?php echo number_format("$goalLineM")?></p></td>
					<td class="quanM"><p><?php echo number_format("$goalBoxM")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
					<td class="quanY"><p><?php echo number_format("0")?></p></td>
					<td class="quanY"><p><?php echo number_format("0")?></p></td>
					<td class="quanM"><p><?php echo number_format("0")?></p></td>
					<td class="quanM"><p><?php echo number_format("0")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
					<td class="quanY"><p><?php echo number_format("900000")?></p></td>
					<td class="quanY"><p><?php echo number_format("180000")?></p></td>
					<td class="quanM"><p><?php echo number_format("90000")?></p></td>
					<td class="quanM"><p><?php echo number_format("18000")?></p></td>
				</tr>
				<tr>
					<td class="para"><p>จำนวนวันผลิตคงเหลือ</p></td>
					<td class="quan" colspan="3"><p><?php echo number_format("$resultDay")?></p></td>
					<td class="para2"><p>วัน</p></td>
				</tr>
				<tr>
					<td class="para"><p>ยอดเฉลี่ยคงเหลือต่อวัน</p></td>
					<td class="quan" colspan="3"><p><?php echo number_format("0")?></p></td>
					<td class="para2"><p>กล่อง</p></td>
				</tr>
			</table>
		</div>
			
	</div>
		
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 15000); // Change image every 15seconds
}
</script>

<script type="text/javascript">window.onload = time_h('time_h');</script>
<script type="text/javascript">window.onload = time_m('time_m');</script>
<script type="text/javascript">window.onload = time_s('time_s');</script>
</body>
</html>