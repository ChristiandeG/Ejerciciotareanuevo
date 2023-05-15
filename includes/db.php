<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'base_datos_login'
) or die(mysqli_error($mysqli));
?>
