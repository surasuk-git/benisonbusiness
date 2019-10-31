<?php
ob_start();
session_start();
include 'connection.php';
?>
	
<!DOCTYPE html>
<html>
<head>
<html>
<head>
<title>สินค้ารอแพ็ค - Facoty System Benison Business Co., Ltd.</title>
<link rel="shortcut icon" href="icon.png" type="image/png">
<meta http-equiv="refresh" content="60">
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
tr:nth-child(2).data{
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
      text-align: center;
      font-size: 70px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.quanY{
      background-color: #3CB371;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 60px;
	  font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 38%;
	  
  }
  td.quanM{
      background-color: #8FBC8F;
      border: 3px solid #ddd;
      text-align: right;
	  font-size: 60px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 38%;
	  
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
<div class="container-fluid">
	<div class="row">
			<table class="show1" style="margin:0;">
				<tr>
				<th colspan="2" align="center" bgcolor="#FFFFFF"><font color="#000000">สินค้ารอแพ็ค</font></</td>
				</tr>
				<tr>
					<th width="50%" style="background-color:#FA8072;color:#000;">ข้อต่อ</th>
				</tr>
			</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				
					<?php
					$AddDate = $_GET['AddDate'];
					$ProductID = $_GET['ProductID'];
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = 16 then Quantity else 0 END ) AS Block
					FROM tblist WHERE ProductID = 16 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$sumQuantity = $sumQuantity + $row["Block"];
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["Block"])."</td>";
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
			
			
            $avgTotal = floor($sumQuantity /10) ;
           
            echo "<tr class=agv>";
            echo "<td>เฉลี่ยการผลิต</td>";
            echo "<td>".number_format($avgTotal)."</td>";
          
            ?>
        
			</table>
		</div>
		
		<div class="col-xs-8 col-md-8">
			<?php
			$sql = "SELECT * FROM tblist WHERE ProductID = '16' ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
			@$totalLine = $totalLine + $row['Quantity'];
			}
			
			$thisM = date('m') ;
			$sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = '16'";
			$result = $conn->query($sql3);
			while($row = $result->fetch_assoc()) {
			$TotalMonth = $row['TotalMonth'];
			}
			
			$goalLineY = 2434364;
			$goalLineM = $goalLineY / 10 ;
			$goalLineD = $goalLineM / 30 ;
			$resultLineY = $goalLineY - $totalLine ;
			$resultLineM = $goalLineM - $TotalMonth ;
			$today = date('d') ;
			@$DayNow = date('z');
			$agvYear = $totalLine /$DayNow;
			$agvMonth = $TotalMonth / $today ;
			$DaySumOfYear = ( (($DayNow * $goalLineD ) - $totalLine) / $agvYear) ;
			$DaySumOfMonth = ( (($today * $goalLineD ) - $TotalMonth) / $agvMonth) ; 
			?>
			  <table border="0" class="show2">
				<tr>
					<th></th>
					<th>ปี</th>
					<th>เดือน</th>
				</tr>
				
				<tr>
					<td class="para"><p>เป้าหมายการผลิต</p></td>
					<td class="quanY"><p><?php echo number_format("$goalLineY")?></p></td>
					
					<td class="quanM"><p><?php echo number_format("$goalLineM")?></p></td>

				</tr>
				<tr>
					<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
					<td class="quanY"><p><?php echo number_format("$totalLine")?></p></td>
					
					<td class="quanM"><p><?php echo number_format("$TotalMonth")?></p></td>
					
				</tr>
				<tr>
					<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
					<td class="quanY"><p><?php echo number_format("$resultLineY")?></p></td>
					
					<td class="quanM"><p><?php echo number_format("$resultLineM")?></p></td>
					
				</tr>
				<tr>
					<td class="para"><p>ยอดเฉลี่ยการผลิต (ปี)</p></td>
					
					<td class="quan" colspan="2"><p><?php echo number_format("$agvYear")?> ชิ้น</p></td>
					
				</tr>
				<tr>
					<td class="para"><p>จำนวนวันที่ตามหลัง</p></td>
					<td class="quan"><p><?php echo number_format("$DaySumOfYear")?> วัน</p></td>
					<td class="quan"><p><?php echo number_format("$DaySumOfMonth")?> วัน</p></td>
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
  setTimeout(carousel, 10000); // Change image every 20seconds
}
</script>


<script type="text/javascript">window.onload = time_h('time_h');</script>
<script type="text/javascript">window.onload = time_m('time_m');</script>
<script type="text/javascript">window.onload = time_s('time_s');</script>
</body>
</html>