<?php 

$servername = "localhost";
$database = "juego";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>


	<style>
		
		
			@charset "UTF-8";
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

			body {
			font-family: 'Open Sans', sans-serif;
			font-weight: 300;
			line-height: 1.42em;
			color:#A7A1AE;
			background-image: url("https://interclubescolombia.com.co/io/wp-content/uploads/2021/11/ofaaaaaMesa-de-trabajo-1.png");
			
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
			}
			

			h1 {
			font-size:3em; 
			font-weight: 300;
			line-height:1em;
			text-align: center;
			color: #4DC3FA;
			}

			h2 {
			font-size:1em; 
			font-weight: 300;
			text-align: center;
			display: block;
			line-height:1em;
			padding-bottom: 2em;
			color: #FB667A;
			}

			h2 a {
			font-weight: 700;
			font-size: 15px;
			text-transform: uppercase;
			color: white;
			text-decoration: none;
			}

			.blue { color: #185875; }
			.yellow { color: #FFF842; }

			.container th h1 {
				font-weight: bold;
				font-size: 1em;
			text-align: left;
			color: white;
			}

			.container td {
				font-weight: normal;
				font-size: 1em;
			-webkit-box-shadow: 0 2px 2px -2px #0E1119;
				-moz-box-shadow: 0 2px 2px -2px #0E1119;
						box-shadow: 0 2px 2px -2px #0E1119;
			}

			.container {
				
				text-align: left;
				overflow: hidden;
				width: 80%;
				margin: 0 auto;
				display: table;
				padding: 20em 0 8em 0;
			}

			.container td, .container th {
				padding-bottom: 2%;
				padding-top: 2%;
			padding-left:2%;  
			}

			/* Background-color of the odd rows */
			.container tr:nth-child(odd) {
				background-color: #00000091;
			}

			/* Background-color of the even rows */
			.container tr:nth-child(even) {
				background-color: #00000091;
			}

			.container th {
				background-color: #D10016EB;
			}

			.container td:first-child { color: #FB667A; }

			.container tr:hover {
			background-color: #464A52;
			-webkit-box-shadow: 0 6px 6px -6px #0E1119;
				-moz-box-shadow: 0 6px 6px -6px #0E1119;
						box-shadow: 0 6px 6px -6px #0E1119;
			}

			.container td:hover {
			background-color: #FFF842;
			color: #403E10;
			font-weight: bold;
			
			box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
			transform: translate3d(6px, -6px, 0);
			
			transition-delay: 0s;
				transition-duration: 0.4s;
				transition-property: all;
			transition-timing-function: line;
			}

			.primer {
			color: #FB667A;
			font-weight: bold;
			text-align: center;
			font-weight: 700;
			text-transform: uppercase;
			font-size: 4em;

			}

			@media (max-width: 800px) {
			.container td:nth-child(4),
			.container th:nth-child(4) { display: none; }
			}


	</style>
</head>
<body>


	<table  class="container" >
	<thead>
		<tr>
			
			<th><h1>Chapa</h1></th>
			<th><h1>Documento</h1></th>
			<th><h1>fecha</h1></th>
			<th><h1>puntaje</h1></th>
			<th><h1>Posicion</h1></th>	
		</tr>
	</thead>

		<?php 
		$sql="SELECT * from tabla_pos ORDER BY puntaje DESC" ;
		$result=mysqli_query($conn,$sql);
		$posi=0;
		while($mostrar=mysqli_fetch_array($result)){
			
			$posi= $posi+1;
		
		?>
		<tbody>
			<tr>
				<td><?php echo $mostrar['chapa']; ?></td>
				<td><?php echo $mostrar['documento']; ?></td>
				<td><?php echo $mostrar['fecha']; ?></td>
				<td><?php echo $mostrar['puntaje']; ?></td>
				<td class="primer"><?php echo $posi; ?></td>

			</tr>
		</tbody>
	<?php 
	}
	 ?>
	</table>

	<h2 style="background-color: red "><a href="http://localhost/crazy_racing">Vover al juego</a></h2>


	



</body>
</html>