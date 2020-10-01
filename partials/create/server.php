<?php
include __DIR__ . '/../database.php';

if(empty($_POST['roomNumber'])) {
  die('non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])) {
  die('non hai inserito il numero del piano');
}

if(empty($_POST['beds'])) {
  die('non hai inserito il numero dei letti');
}


$sql = "INSERT INTO stanze (room_number,floor,beds,created_at,updated_at) VALUES (?,?,?,NOW(),NOW())";
$stmt = $conn->prepare($sql);
//comando parametrico sostituendo i valori effetti ai ? ? bind_param restituisce valore booleano
$stmt->bind_param("iii",$roomNum,$floor,$beds);
//valori effettivi
$roomNum = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();
var_dump($stmt);

if($stmt && $stmt->affected_rows > 0){
  header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif($stmt) {
  echo 'nessun inserimento';
} else {
  echo 'errore';
}

$stmt->close();
$conn->close();
 ?>
