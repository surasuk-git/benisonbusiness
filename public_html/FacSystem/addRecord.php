<!DOCTYPE html>
<html>
<head>
<html>
<head>
<title>เพิ่มรายการ - Facoty System Benison Business Co., Ltd.</title>
<link rel="shortcut icon" href="icon.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
      background-color: #3CB371;
      border: 3px solid #ddd;
      text-align: right;
      font-size: 50px;
	  font-family: 'Sarabun', sans-serif;
      padding-right: 10px; 
      width: 18%;
	  
  }
  td.quanM{
      background-color: #8FBC8F;
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

<div class="container-fluid ">
  <div class="row">
		<div class="col-xs-3 col-md-3">
		</div>
		<div class="col-xs-6 col-md-6">
			
			<form action="addList.php" method="post">
			<table class="show1">
			<tr>
				<th>วันที่</th>
				<td><input type="date" name="AddDate" required></td>
			</tr>
			<tr>
				<th>ชื่อสินค้า</th>
				<td>
					<select name="ProductID" size="7" style="width:300px;" required> //สินค้า
						<option value="1">SD-75-MM</option>
						<option value="8">SD-75-HR</option>
						<option value="2">SK-75-MM</option>
						<option value="9">SK-75-HR</option>
						<option value="3">SW-75-MM</option>
						<option value="10">SW-75-HR</option>
						<option value="4">SJ-75-MM</option>
						<option value="11">SJ-75-HR</option>
						<option value="5">SC-75-MM</option>
						<option value="12">SC-75-HR</option>
						<option value="6">SIF-75-MM</option>
						<option value="13">SIF-75-HR</option>
						<option value="7">SA-75-MM</option>
						<option value="14">SA-75-HR</option>
						<option value="16">Block-Joint</option>
						<option value="29">เม็ด-580</option>
						<option value="30">เม็ด-660</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>จำนวนที่ผลิตได้</th>
				<td>
					<input type="number" name="Quantity" required>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="บันทึก" onclick="bootbox.confirm">
				</td>
			</tr>
			</table>
			</form>
			<table class="show1">
				<tr>
					<td colspan="2">
						<a href="home.php"><input type="submit" value="กลับ"></a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
 
<script type="text/javascript">window.onload = time_h('time_h');</script>
<script type="text/javascript">window.onload = time_m('time_m');</script>
<script type="text/javascript">window.onload = time_s('time_s');</script>
<script type="text/javascript">window.onload = date_d('date_d');</script>
<script type="text/javascript">window.onload = date_m('date_m');</script>
<script type="text/javascript">window.onload = date_y('date_y');</script>
</body>
</html>