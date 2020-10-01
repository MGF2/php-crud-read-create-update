<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if(empty($_POST['id'])) {
  die('nessun id');
}
$id = $_POST['id'];

removeId($conn,'stanze',$id,$basepath)
?>
