<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
		
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}
		
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body>
	
	<br /> <br /> <br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-striped">
		<thead>
			<tr>
            
                                        <th scope="col"> NAME</th>
                                        <th scope="col">REG NO</th>
                                        <th scope="col">DEPARTMENT</th>
                                        <th scope="col">MAIL ID</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col">FROM</th>
                                        <th scope="col">TO</th>
                                        <th scope="col">FARE</th>
                                        <th scope="col">BUS ID</th>
                                  
			</tr>
		</thead>
		<tbody>
			<?php
				
				include "db.php";
				$query = $con->query("SELECT * FROM `stureg` where reg='$_SESSION[regno]'");
				while($fetch = $query->fetch_array()){
					
			?>
			
			<tr>
				
                                                <td style="text-align:center;"><?php echo $fetch["name"]; ?></td>
                                                <td style="text-align:center;"><?php echo $fetch["reg"]; ?></td>
                                                <td style="text-align:center;"><?php echo $fetch["dept"]; ?></td>
                                                <td style="text-align:center;"><?php echo $fetch["mid"]; ?></td> 
                                                <td style="text-align:center;"><?php echo $fetch["ad"]; ?></td>
                                                    <td style="text-align:center;"><?php echo $fetch["cont"]; ?></td>
                                                    <td style="text-align:center;"><?php echo $fetch["frm"]; ?></td>
                                                    <td style="text-align:center;"><?php echo $fetch["too"]; ?></td>
                                                    <td style="text-align:center;"><?php echo $fetch["fare"]; ?></td>
                                                    <td style="text-align:center;"><?php echo $fetch["busid"]; ?></td>


			</tr>
			
			<?php
				}
			?>
		</tbody>
	</table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>
