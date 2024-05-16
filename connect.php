<?php
  $servername = "localhost";
  $username = "admin";
  $password = "@Neverdie1001";
  $basename = "NewsPaper";

  $dbc = mysqli_connect($servername, $username, $password, $basename) or
  die('Error connecting to MySQL server.'.mysqli_connect_error());
  mysqli_set_charset($dbc, "utf8");
?>
