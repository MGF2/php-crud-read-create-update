<?php
//Le variabili esterne non si vedono all'interno della funzione
//quindi dobbiamo passarle come argomento
//quindi $conn passato come parametro è un valore segnaposto
//può essere anche $connection

function getAll($conn,$table) {
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);

  if($result && $result->num_rows > 0){
    $results = [];
    while ($row = $result->fetch_assoc()) {
      $results[] = $row;
    }
  } elseif ($result) {
    $results = [];
  } else {
    $results = false;
  }

  $conn->close();
  return $results;
}

//I dati passato sono solo segnaposto
function removeId($conn,$table,$id,$basepath) {
  $sql = "DELETE FROM $table WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();

  if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/index.php?roomId=$id");
  } else {
    echo 'non ho cancellato';
  }

  $stmt->close();
  $conn->close();
}

//Riutilizzabile con show e con update
function getId($conn,$table,$id) {
  $sql = "SELECT * FROM $table WHERE id = $id";
  $result = $conn->query($sql);

  if($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
  } elseif ($result) {
    $row = "";
  } else {
    $row = false;
  }
  $conn->close();
  return $row;
}
 ?>
