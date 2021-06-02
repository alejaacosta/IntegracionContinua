
<?php

echo "Integrantes<br>";
$host = "172.17.0.3";
$usuario = "root";
$pass = "root";
$db = "integracion";
$conn = new mysqli($host,$usuario,$pass,$db);

if($conn->connect_errno){
die('Error '.$conn->connect_error);
}

$consulta = "select * from estudiantes";

if($res = $conn->query($consulta)){
while($row=$res->fetch_row()){
echo $row[0]."<br>";
}
$res->close();
}
$conn->close();
?>












