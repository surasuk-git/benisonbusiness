<!DOCTYPE html>
<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>

<meta charset=utf-8 />
</head>
<body>
 <center>
 <form action="addList.php" id="frmMain" name="frmMain" method="post">
<h1>เพิ่มรายการผลิต</h1>

<table width="600" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    <td width="91"> <div align="center">วันที่ </div></td>
    <td width="98"> <div align="center">รหัส</div></td>
    <td width="198"> <div align="center">จำนวน </div></td>
    
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br />
<input type="button" id="createRows" value="Add">
<input type="button" id="deleteRows" value="Del">
<input type="button" id="clearRows" value="Clear">
 <center>
 <br>
 <input type="hidden" id="hdnCount" name="hdnCount">
<input type="submit" value="Submit">
 </form>
 <script type="text/javascript">
$(document).ready(function(){

	var rows = 1;
	$("#createRows").click(function(){
						var tr = "<tr>";
						tr = tr + "<td><input type='date' name='AddDate"+rows+"' id='txtCustomerID"+rows+"' size='5'></td>";
						tr = tr + "<td><input type='text' name='"+rows+"' id='txtName"+rows+"' size='10'></td>";
						tr = tr + "<td><input type='number' name='txtEmail"+rows+"' id='txtEmail"+rows+"' size='15'></td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
						$('#hdnCount').val(rows);
						rows = rows + 1;
		});

		$("#deleteRows").click(function(){
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				rows = 1;
				$('#hdnCount').val(rows);
				$('#myTable > tbody:last').empty(); // remove all
		});

	});
</script>
</body>
</html>