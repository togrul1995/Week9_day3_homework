<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	table{
		width: 80%;
		font-size: 20px;
		border: 1px solid black;
	}
	/*tr{
		border: 1px solid black;
	}*/
	td{
		border: 1px solid black;
		padding: 5px;
	}
</style>
<body>
	<?php  
		$host = "localhost";
		$user_name = "root";
		$password = "";
		$db_name = "telebe";
		$db_con = mysqli_connect($host, $user_name, $password, $db_name); //1.servere qosulmaq prosesi
		if($db_con){
			$sql= "SELECT * FROM telebe";//2.data cekmek istediyim table-a gonderdiyim sorgu
			$query= mysqli_query($db_con,$sql);//3.sorgu vasitesi ile cekilen datanin php-nin anlayabileceyi formaya cevirmek (Bu data daginiq datadir)
			//4.mysqli_fetch_assoc() vasitesi ile table-deki daginiq datanin her setirini assosyativ massive cevirirem
		?>
			<table>
			  <tr>
			    <td>Sira</td>
			    <td>Ad</td> 
			    <td>Soyad</td>
			    <td>Yas</td>
			    <td>Deyis</td>
			   </tr>
		<?php	while ($row=mysqli_fetch_assoc($query)){ //5.butun setirleri massive cevirib ekrana yazdirabilmek ucun while dongusunun icerisine atiram.
			?>
				<tr>
			<?php
				foreach ($row as $key => $value) { //6. foreach vasitesi ile istediyim datani ekrana yazdiriram.
					?>
					<td> <?php echo $value; ?></td>
				<?php } ?>
				<td>
					<a href="delete.php?id=<?=$row["id"]?>">DELETE</a>
					<a href="insert.php">INSERT</a>
				</td>
				</tr>
			<?php } ?>
			</table>
			<?php
		}else{
			echo "error";
		}
	?>
</body>
</html>