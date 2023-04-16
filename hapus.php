<?php

  include("config.php");

  if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $query);

    if($query) {
      header('Location: list-siswa.php');
    }
    else{
      die("Failed Remove Data");
    }
  }
  else {
    die("Permission Denied");
  }

?>