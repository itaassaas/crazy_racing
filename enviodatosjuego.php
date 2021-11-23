

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


$puntaje = $_POST['puntaje'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
// esta es una forma de devolverle el nuevo valor a
// javascript y lo va a agarrar el "success" del ajax
echo json_encode($puntaje, $nombre, $documento);


$sql = "INSERT INTO tabla_pos (chapa, documento, fecha, puntaje) VALUES ('$nombre', '$documento', CURRENT_TIMESTAMP(), '$puntaje')";



if (mysqli_query($conn, $sql)) {
      echo $nombre;
      echo $puntaje;
      echo $documento;
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);




?>