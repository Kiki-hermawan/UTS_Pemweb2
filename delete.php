<?php

  include "config.php";

  $id = $_GET['id'];
  $query = "DELETE FROM tbbuku WHERE id = $id";
  $result = mysqli_query($koneksi, $query);
  if($result){
    header("location: index.php");
  }

?>