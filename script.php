<?php
  include 'connect.php';
  define('UPLPATH', 'img/');

  if ($dbc && isset($_POST['submit'])) {
    $date = date('d.m.Y.');
    $time = date('H:i');
    $title = $_POST['title'];
    $abstract = $_POST['abstract'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $tempimage = $_FILES['image']['tmp_name'];
    if (isset($_POST['storage'])) {
      $storage = 1;
    } else {
      $storage = 0;
    }

    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name']);
    
    $query = "INSERT INTO news (date, time, title, abstract, text, image, category, storage) VALUES ('$date', '$time', '$title', '$abstract', '$text', '$image', '$category', '$storage')";

    $result = mysqli_query($dbc,$query) or die('Error querying database.');
    header('Location:entrance.php');
  }

  mysqli_close($dbc);
?>
