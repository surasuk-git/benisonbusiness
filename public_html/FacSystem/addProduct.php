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
<script type="text/javascript" src="date_d.js"></script>
<script type="text/javascript" src="date_m.js"></script>
<script type="text/javascript" src="date_y.js"></script>
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
}
table.show2 {
    background-color: #FFFFFF;
    border-collapse: collapse;
    border-spacing: 0;
    border: 2px solid #ddd;
    font-family: 'Sarabun', sans-serif;
    width: 100%;
}
table.day {
    font-family: 'Sarabun', sans-serif;
    width: 100%;
    font-size: 40px;
    margin:10px 0px;
    
}
table.time {
    font-family: 'Sarabun', sans-serif;
    width: 100%;
    font-size: 40px;
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
    font-size: 1.95em ;
        
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
      border: 3px solid #ddd;
      text-align: center;
      font-size: 40px ;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.quanY{
      background-color: #FFFFCC;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 40px ;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.quanM{
      background-color: #FFDDDD;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 40px ;
      font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
  }
  td.para{
      border: 3px solid #ddd;
      text-align: left;
      font-size: 2em;
      font-family: 'Sarabun', sans-serif;
      background-color:#02A550;
      color: white;
      line-height: 90px ; 
      letter-spacing: -2.5px;
  }
  td.blank{
      background-color:#02A550;
      border: 3px solid #02A550;
  }
td.number,p.number{
	
}
h3{font-family: 'Sarabun', sans-serif;text-align: center;}
</style>

</head>

<body>
<div class="container-fluid">
  <div class="row" style="background-color:#02A550 ;">
    <div class="col-xs-1 col-md-1">
    </div>
	<div class="col-xs-1 col-md-1">
    </div>
    <div class="col-xs-2 col-md-2">
      <img src="B-Logo.png" style="width:75%;padding:10px;">
    </div>
    <div class="col-xs-3 col-md-3">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <h3>
              วัน
            </h3>
             <table class="day">
              <td class="day">
                <p class="day" id="date_d">
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
                <p class="day" id="date_m">
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
                <p class="day" id="date_y">
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

<div class="container-fluid ">
	<div class="row">
		<div class="col-xs-3 col-md-3">
		</div>
		<div class="col-xs-6 col-md-6">
			<table class="show1">
				<?php
				$ProductCode = $_POST['ProductCode'];
				$ProductName = $_POST['ProductName'];
				$ProductBrand = $_POST['ProductBrand'];
				$sql1 = "INSERT INTO tbProduct (ProductCode,ProductName,ProductBrand) VALUES ('$ProductCode','$ProductName','$ProductBrand')" ;

				if ($conn->query($sql1) === TRUE) {
					echo "<tr>";
					echo "<td>เพิ่มข้อมูลสินค้าเสร็จสิ้น</td><br>";
				} else {
					echo "<tr>";
					echo "<td>Error: " . $sql1 . "<br>" . $conn->error . "มีข้อผิดพลาด</td>";
					
				}
				?>
			<tr>
			<td><button align="center"><a href="addProduct.html">กลับ</button></td>
			</table>
		</div>
	</div>
</div>
</body>
</html>