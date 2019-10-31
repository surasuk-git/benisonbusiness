<?php
ob_start();
session_start();
include 'connection.php';
?>
	
<!DOCTYPE html>
<html>
<head>
<title>ข้อต่อ - Facoty System Benison Business Co., Ltd.</title>
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
      text-align: center;
      font-size: 60px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.quanH{
      background-color:#9966CC;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 50px;
	  font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
	  color:white;
  }
  td.quanM{
      background-color:#3300FF;
      border: 3px solid #ddd;
      text-align: right;
	  font-size: 50px;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
	  color:white;
	  
  }
  td.para{
      border: 3px solid #ddd;
      text-align: left;
      font-size: 30px;
      font-family: 'Sarabun', sans-serif;
      background-color:#02A550;
      color: white;
      line-height: 85px ; 
      width:20%;
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
				<th colspan="2" align="center" bgcolor="#FF0033"><font color="#fff">SK-75 (Slim Corner)</font></</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="3" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">MOMO</td>
					<td align="center" bgcolor="#FFFFFF">HARU</td>
					<td align="center" bgcolor="#FFFFFF">รวม</td>
				</tr>
				<?php
					
					$AddDate = $_GET['AddDate'];
					$ProductID = $_GET['ProductID'];
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = '2' then Quantity else 0 END )AS MM , 
					SUM(CASE when ProductID = '9' then Quantity else 0 END )AS HR 
					FROM tblist 
					WHERE ProductID IN ('2', '9') 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$totalSKMM = $totalSKMM + $row['MM'] ;
							@$totalSKHR = $totalSKHR + $row['HR'] ;
							
							@$SKMM = $row['MM'];
							@$SKHR = $row['HR'];
							@$totalSK = $SKMM + $SKHR ;
							@$totalBoxTb  = floor($totalBoxTb + $boxQuantity);
							
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["MM"])."</td>";
							echo "<td>".number_format($row["HR"])."</td>";
							echo "<td>".number_format($totalSK)."</td>";
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					?>
					<tr>
				
					<?php
										
					$avgSKMM = floor($totalSKMM/10) ;
					$avgSKHR = floor($totalSKHR/10) ;
					$avgSK = $avgSKMM + $avgSKHR ;
					echo "<tr class=agv>";
					echo "<td>เฉลี่ยการผลิตรวม</td>";
					echo "<td colspan='3'>".number_format($avgSK)."</td>";
					?>
        
			</table>				
		</div>
		
		<div class="col-xs-8 col-md-8">
				<?php
				$sql = "SELECT SUM(Quantity) AS TotalSKMM FROM tblist WHERE ProductID = 2 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSKMM = $row['TotalSKMM'];
				}
				
				
				$sql = "SELECT SUM(Quantity) AS TotalSKHR FROM tblist WHERE ProductID = 9 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSKHR = $row['TotalSKHR'];
				}
				// $thisM = date('m') ;
				// $sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 9";
				// $result = $conn->query($sql3);
				// while($row = $result->fetch_assoc()) {
				// $TotalMonth = $row['TotalMonth'];
				// }
				$sql2 = "SELECT AVG(Quantity) as avgSKMM FROM tblist WHERE ProductID = 2 AND Quantity > 0 ";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSKMM = $row['avgSKMM'];}
				
				$sql2 = "SELECT AVG(Quantity) as avgSKHR FROM tblist WHERE ProductID = 9 AND Quantity > 0";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSKHR = $row['avgSKHR'];}
					
				$avgAllSK = $avgSKMM + $avgSKHR ;
				
				
				@$goalSKMM = 250000;
				@$goalSKHR = 575000;
				@$resultSKHR = $goalSKHR - $totalLineSKHR ;
				@$resultSKMM = $goalSKMM - $totalLineSKMM ;
				@$TotalresultSK = $resultSKMM + $resultSKHR ;	
				
				?>
				<table border="0" class="show2">
					<tr>
						<th></th>
						<th>MM</th>
						<th>HR</th>
					</tr>
					<tr>
						<td class="para"><p>เป้าหมายการผลิตต่อปี</p></td>
						<td  class="quanM"><p><?php echo number_format($goalSKMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($goalSKHR) ;?></p></td>
						
					</tr>
					<tr>
						<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
						<td class="quanM"><p><?php echo number_format($totalLineSKMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($totalLineSKHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
						<td class="quanM"><p><?php echo number_format($resultSKMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($resultSKHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSK) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดเฉลี่ยการผลิตรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($avgAllSK);?></p></td>
					</tr>
					<tr>
						<td class="para"><p>จำนวนวันที่ต้องใช้ในการผลิต</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSK/$avgAllSK) ;?></p></td>
					</tr>
				</table>
		</div>
	</div>	
</div>
</div>


<div class="container-fluid mySlides"> 
	<div class="row">
		<table class="show1" style="margin:0;">
			<tr>
				<th colspan="2" align="center" bgcolor="#FF0033"><font color="#fff">SW-75 (Wall Corner)</font></</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="3" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">MOMO</td>
					<td align="center" bgcolor="#FFFFFF">HARU</td>
					<td align="center" bgcolor="#FFFFFF">รวม</td>
				</tr>
				<?php
					
					$AddDate = $_GET['AddDate'];
					$ProductID = $_GET['ProductID'];
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = '3' then Quantity else 0 END )AS MM , 
					SUM(CASE when ProductID = '10' then Quantity else 0 END )AS HR 
					FROM tblist 
					WHERE ProductID IN ('3', '10') 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$totalSWMM = $totalSWMM + $row['MM'] ;
							@$totalSWHR = $totalSWHR + $row['HR'] ;
							
							@$SWMM = $row['MM'];
							@$SWHR = $row['HR'];
							@$totalSW = $SWMM + $SWHR ;
							@$totalBoxTb  = floor($totalBoxTb + $boxQuantity);
							
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["MM"])."</td>";
							echo "<td>".number_format($row["HR"])."</td>";
							echo "<td>".number_format($totalSW)."</td>";
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					?>
					<tr>
				
					<?php
					
					$avgSWMM = floor($totalSWMM/10) ;
					$avgSWHR = floor($totalSWHR/10) ;
					$avgSW = $avgSWM + $avgSWHR ;
					echo "<tr class=agv>";
					echo "<td>เฉลี่ยการผลิตรวม</td>";
					echo "<td colspan='3'>".number_format($avgSW)."</td>";
					?>
        
			</table>				
		</div>
		
		<div class="col-xs-8 col-md-8">
				<?php
				$sql = "SELECT SUM(Quantity) AS TotalSWMM FROM tblist WHERE ProductID = 3 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSWMM = $row['TotalSWMM'];
				}
				
				
				$sql = "SELECT SUM(Quantity) AS TotalSWHR FROM tblist WHERE ProductID = 10 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSWHR = $row['TotalSWHR'];
				}
				// $thisM = date('m') ;
				// $sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 9";
				// $result = $conn->query($sql3);
				// while($row = $result->fetch_assoc()) {
				// $TotalMonth = $row['TotalMonth'];
				// }
				$sql2 = "SELECT AVG(Quantity) as avgSWMM FROM tblist WHERE ProductID = 3 AND Quantity > 0 ";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSWMM = $row['avgSWMM'];}
				
				$sql2 = "SELECT AVG(Quantity) as avgSWHR FROM tblist WHERE ProductID = 10 AND Quantity > 0";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSWHR = $row['avgSWHR'];}
					
				$avgAllSW = $avgSWMM + $avgSWHR ;
				
				@$goalSWMM = 200000;
				@$goalSWHR = 575000;
				@$resultSWHR = $goalSWHR - $totalLineSWHR ;
				@$resultSWMM = $goalSWMM - $totalLineSWMM ;
				@$TotalresultSW = $resultSWMM + $resultSWHR ;	
				?>
				<table border="0" class="show2">
					<tr>
						<th></th>
						<th>MM</th>
						<th>HR</th>
					</tr>
					<tr>
						<td class="para"><p>เป้าหมายการผลิตต่อปี</p></td>
						<td  class="quanM"><p><?php echo number_format($goalSWMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($goalSWHR) ;?></p></td>
						
					</tr>
					<tr>
						<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
						<td class="quanM"><p><?php echo number_format($totalLineSWMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($totalLineSWHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
						<td class="quanM"><p><?php echo number_format($resultSWMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($resultSWHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSW) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดเฉลี่ยการผลิตรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($avgAllSW);?></p></td>
					</tr>
					<tr>
						<td class="para"><p>จำนวนวันที่ต้องใช้ในการผลิต</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSW/$avgAllSW) ;?></p></td>
					</tr>
				</table>
		</div>
	</div>	
</div>
</div>

<div class="container-fluid mySlides"> 
	<div class="row">
		<table class="show1" style="margin:0;">
			<tr>
				<th colspan="2" align="center" bgcolor="#FF0033"><font color="#fff">SJ-75 (Slim Joint)</font></</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="3" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">MOMO</td>
					<td align="center" bgcolor="#FFFFFF">HARU</td>
					<td align="center" bgcolor="#FFFFFF">รวม</td>
				</tr>
				<?php
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = '4' then Quantity else 0 END )AS MM , 
					SUM(CASE when ProductID = '11' then Quantity else 0 END )AS HR 
					FROM tblist 
					WHERE ProductID IN ('4', '11') 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$totalSJMM = $totalSJMM + $row['MM'] ;
							@$totalSJHR = $totalSJHR + $row['HR'] ;
							@$SJMM = $row['MM'];
							@$SJHR = $row['HR'];
							@$totalSJ = $SJMM + $SJHR ;
							
							
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["MM"])."</td>";
							echo "<td>".number_format($row["HR"])."</td>";
							echo "<td>".number_format($totalSJ)."</td>";
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					$avgSJMM = $totalSJMM / 10;
					$avgSJHR = $totalSJHR / 10 ;
					$avgSJ = $avgSJMM + $avgSJHR ;
					
					echo "<tr class=agv>";
					echo "<td>เฉลี่ยการผลิตรวม</td>";
					echo "<td colspan='3'>".number_format($avgSJ)."</td>";
					?>
			</table>				
		</div>
		
		<div class="col-xs-8 col-md-8">
				<?php
				$sql = "SELECT SUM(Quantity) AS TotalSJMM FROM tblist WHERE ProductID = 4 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSJMM = $row['TotalSJMM'];
				}
				
				
				$sql = "SELECT SUM(Quantity) AS TotalSJHR FROM tblist WHERE ProductID = 11 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSJHR = $row['TotalSJHR'];
				}
				// $thisM = date('m') ;
				// $sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 9";
				// $result = $conn->query($sql3);
				// while($row = $result->fetch_assoc()) {
				// $TotalMonth = $row['TotalMonth'];
				// }
				
				$sql2 = "SELECT AVG(Quantity) as avgSJMM FROM tblist WHERE ProductID = 4 AND Quantity > 0 ";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSJMM = $row['avgSJMM'];}
				
				$sql2 = "SELECT AVG(Quantity) as avgSJHR FROM tblist WHERE ProductID = 11 AND Quantity > 0";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSJHR = $row['avgSJHR'];}
					
				$avgAllSJ = $avgSJMM + $avgSJHR ;
				
				
				@$goalSJMM = 22500;
				@$goalSJHR = 175000;
				@$resultSJHR = $goalSJHR - $totalLineSJHR ;
				@$resultSJMM = $goalSJMM - $totalLineSJMM ;
				@$TotalresultSJ = $resultSJMM + $resultSJHR ;	
				?>
				<table border="0" class="show2">
					<tr>
						<th></th>
						<th>MM</th>
						<th>HR</th>
					</tr>
					<tr>
						<td class="para"><p>เป้าหมายการผลิตต่อปี</p></td>
						<td  class="quanM"><p><?php echo number_format($goalSJMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($goalSJHR) ;?></p></td>
						
					</tr>
					<tr>
						<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
						<td class="quanM"><p><?php echo number_format($totalLineSJMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($totalLineSJHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
						<td class="quanM"><p><?php echo number_format($resultSJMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($resultSJHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSJ) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดเฉลี่ยการผลิตรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($avgAllSJ);?></p></td>
					</tr>
					<tr>
						<td class="para"><p>จำนวนวันที่ต้องใช้ในการผลิต</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSJ/$avgAllSJ) ;?></p></td>
					</tr>
				</table>
		</div>
	</div>	
</div>

<div class="container-fluid mySlides"> 
	<div class="row">
		<table class="show1" style="margin:0;">
			<tr>
				<th colspan="2" align="center" bgcolor="#FF0033"><font color="#fff">SC-75 (Slim Corner For Raising)</font></</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="3" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">MOMO</td>
					<td align="center" bgcolor="#FFFFFF">HARU</td>
					<td align="center" bgcolor="#FFFFFF">รวม</td>
				</tr>
				<?php
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = '5' then Quantity else 0 END )AS MM , 
					SUM(CASE when ProductID = '12' then Quantity else 0 END )AS HR 
					FROM tblist 
					WHERE ProductID IN ('5', '12') 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$totalSCMM = $totalSCMM + $row['MM'] ;
							@$totalSCHR = $totalSCHR + $row['HR'] ;
							@$SCMM = $row['MM'];
							@$SCHR = $row['HR'];
							@$totalSC = $SCMM + $SCHR ;
							
							
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["MM"])."</td>";
							echo "<td>".number_format($row["HR"])."</td>";
							echo "<td>".number_format($totalSC)."</td>";
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					$avgSCMM = $totalSCMM / 10;
					$avgSCHR = $totalSCHR / 10 ;
					$avgSC = $avgSCMM + $avgSCHR ;
					
					echo "<tr class=agv>";
					echo "<td>เฉลี่ยการผลิตรวม</td>";
					echo "<td colspan='3'>".number_format($avgSC)."</td>";
					?>
			</table>				
		</div>
		
		<div class="col-xs-8 col-md-8">
				<?php
				$sql = "SELECT SUM(Quantity) AS TotalSCMM FROM tblist WHERE ProductID = 5 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSCMM = $row['TotalSCMM'];
				}
				
				
				$sql = "SELECT SUM(Quantity) AS TotalSCHR FROM tblist WHERE ProductID = 12 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSCHR = $row['TotalSCHR'];
				}
				// $thisM = date('m') ;
				// $sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 9";
				// $result = $conn->query($sql3);
				// while($row = $result->fetch_assoc()) {
				// $TotalMonth = $row['TotalMonth'];
				// }
				
				$sql2 = "SELECT AVG(Quantity) as avgSCMM FROM tblist WHERE ProductID = 5 AND Quantity > 0 ";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSJMM = $row['avgSJMM'];}
				
				$sql2 = "SELECT AVG(Quantity) as avgSCHR FROM tblist WHERE ProductID = 12 AND Quantity > 0";
				$result = $conn->query($sql2);
					while($row = $result->fetch_assoc()) {
					$avgSCHR = $row['avgSCHR'];}
					
				$avgAllSC = $avgSCMM + $avgSCHR ;
				
				@$goalSCMM = 30000;
				@$goalSCHR = 450000;
				@$resultSCHR = $goalSCHR - $totalLineSCHR ;
				@$resultSCMM = $goalSCMM - $totalLineSCMM ;
				@$TotalresultSC = $resultSCMM + $resultSCHR ;	
				?>
				<table border="0" class="show2">
					<tr>
						<th></th>
						<th>MM</th>
						<th>HR</th>
					</tr>
					<tr>
						<td class="para"><p>เป้าหมายการผลิตต่อปี</p></td>
						<td  class="quanM"><p><?php echo number_format($goalSCMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($goalSCHR) ;?></p></td>
						
					</tr>
					<tr>
						<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
						<td class="quanM"><p><?php echo number_format($totalLineSCMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($totalLineSCHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
						<td class="quanM"><p><?php echo number_format($resultSCMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($resultSCHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSC) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดเฉลี่ยการผลิตรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($avgAllSC);?></p></td>
					</tr>
					<tr>
						<td class="para"><p>จำนวนวันที่ต้องใช้ในการผลิต</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSC/$avgAllSC) ;?></p></td>
					</tr>
				</table>
		</div>
	</div>	
</div>

<div class="container-fluid mySlides"> 
	<div class="row">
		<table class="show1" style="margin:0;">
			<tr>
				<th colspan="2" align="center" bgcolor="#FF0033"><font color="#fff">SIF-75 (Slim Cross Over)</font></</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-4"> 
			<table class="show2">
				<th rowspan="2" bgcolor="#FFFFFF"><font color="#000000">วันที่ผลิต</font></th>
				<th colspan="3" bgcolor="#FFFFFF"><font color="#000000">จำนวนที่ผลิตแล้วเสร็จ</font></th>
				<tr>
					<td align="center" bgcolor="#FFFFFF">MOMO</td>
					<td align="center" bgcolor="#FFFFFF">HARU</td>
					<td align="center" bgcolor="#FFFFFF">รวม</td>
				</tr>
				<?php
					
					$sql = "SELECT AddDate , 
					SUM(CASE when ProductID = '6' then Quantity else 0 END )AS MM , 
					SUM(CASE when ProductID = '13' then Quantity else 0 END )AS HR 
					FROM tblist 
					WHERE ProductID IN ('6', '13') 
					GROUP BY AddDate ORDER BY `tblist`.`AddDate` DESC LIMIT 10";
					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							@$totalSIFMM = $totalSIFMM + $row['MM'] ;
							@$totalSIFHR = $totalSIFHR + $row['HR'] ;
							@$SIFMM = $row['MM'];
							@$SIFHR = $row['HR'];
							@$totalSIF = $SIFMM + $SIFHR ;
							
							
							echo "<tr class=data>";
							echo "<td>".date("d-m-Y", strtotime($row["AddDate"]))."</td>"; 
							echo "<td>".number_format($row["MM"])."</td>";
							echo "<td>".number_format($row["HR"])."</td>";
							echo "<td>".number_format($totalSIF)."</td>";
						  }
					  } else {
						  echo "<td>"."ไม่พบข้อมูลล่าสุด"."</td>"; 
					  }
					  
					$avgSIFMM = $totalSIFMM / 10;
					$avgSIFHR = $totalSIFHR / 10 ;
					$avgSIF = $avgSIFMM + $avgSIFHR ;
					
					echo "<tr class=agv>";
					echo "<td>เฉลี่ยการผลิตรวม</td>";
					echo "<td colspan='3'>".number_format($avgSIF)."</td>";
					?>
			</table>				
		</div>
		
		<div class="col-xs-8 col-md-8">
				<?php
				$sql = "SELECT SUM(Quantity) AS TotalSIFMM FROM tblist WHERE ProductID = 6 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSIFMM = $row['TotalSIFMM'];
				}
				
				
				$sql = "SELECT SUM(Quantity) AS TotalSIFHR FROM tblist WHERE ProductID = 13 ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				@$totalLineSIFHR = $row['TotalSIFHR'];
				}
				// $thisM = date('m') ;
				// $sql3 = "SELECT SUM(Quantity) AS TotalMonth FROM tblist WHERE MONTH(AddDate) = '$thisM' AND ProductID = 9";
				// $result = $conn->query($sql3);
				// while($row = $result->fetch_assoc()) {
				// $TotalMonth = $row['TotalMonth'];
				// }
				
				@$goalSIFMM = 10000;
				@$goalSIFHR = 60000;
				@$resultSIFHR = $goalSIFHR - $totalLineSIFHR ;
				@$resultSIFMM = $goalSIFMM - $totalLineSIFMM ;
				@$TotalresultSIF = $resultSIFMM + $resultSIFHR ;	
				?>
				<table border="0" class="show2">
					<tr>
						<th></th>
						<th>MM</th>
						<th>HR</th>
					</tr>
					<tr>
						<td class="para"><p>เป้าหมายการผลิตต่อปี</p></td>
						<td class="quanM"><p><?php echo number_format($goalSIFMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($goalSIFHR) ;?></p></td>
						
					</tr>
					<tr>
						<td class="para"><p>จำนวนที่ผลิตแล้วเสร็จ</p></td>
						<td class="quanM"><p><?php echo number_format($totalLineSIFMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($totalLineSIFHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือ</p></td>
						<td class="quanM"><p><?php echo number_format($resultSIFMM) ;?></p></td>
						<td class="quanH"><p><?php echo number_format($resultSIFHR) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดผลิตคงเหลือรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSIF) ;?></p></td>
					</tr>
					<tr>
						<td class="para"><p>ยอดเฉลี่ยการผลิตรวม</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($avgSIF);?></p></td>
					</tr>
					<tr>
						<td class="para"><p>จำนวนวันที่ต้องใช้ในการผลิต</p></td>
						<td colspan="2"class="quan"><p><?php echo number_format($TotalresultSIF/$avgSIF) ;?></p></td>
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