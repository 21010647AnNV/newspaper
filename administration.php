<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
	<title>ADMINISTRATION</title>
  <style>
    .main {
      padding: 70px 0;
			height: auto;
    }
    .warning {
      width: 74%;
      margin-left: 13%;
      padding: 30px 20px;
      border: 2px solid #EA212D;
      text-align: center;
      font-size: 21px;
    }
    hr {
      display: block;
      width: 100%;
      border: 4px solid black;
    }
		.main h2 {
			text-align: center;
			padding: 0;
			margin-top: -30px;
		}
		.main p {
			margin-top: 35px;
		  font-size: 21px;
		}
		.main span {
			font-weight: bold;
		}
  </style>
</head>
<body>
  <div class="logo">
    <a href="index.php"><img src="img/logo.svg" /></a>
  </div>

  <div class="nav">
    <div class="wrapper">
			<a href="index.php">HOME</a>
      <a href="category.php?category=WORLD">WORLD</a>
      <a href="category.php?category=ECONOMIC">ECONOMIC</a>
			<a class="foc" href="administration.php">ADMINISTRATION</a>
			<a href="entrance.php">ENTRANCE</a>
			<a href='logout.php'>LOGOUT</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
			<h2>ADMINISTRATION</h2>
			<?php
				include 'connect.php';
				$uspjesnaLOGIN = false;
				if(isset($_SESSION['username'])) {
					$nameusera = $_SESSION['username'];
					$uspjesnaLOGIN = true;
					if($_SESSION['level'] == 1) {
						$admin = true;
					} else {
						$admin = false;
					}

					if (($uspjesnaLOGIN == true && $admin == true) || (isset($_SESSION['$username'])) && $_SESSION['$level'] == 1) {
	          $query = "SELECT * FROM news";
	          $result = mysqli_query($dbc, $query);
	          while($row = mysqli_fetch_array($result)) {
	            echo "<form enctype='multipart/form-data' method='POST' action=''>
	                <br/><br/><hr/><br/><br/><label for='title' required>Title news:</label>
	                <input name='title' type='text' class='title' value='".$row['title']."' style='width:240px;height:30px;padding-left:5px;font-weight:bold;'/>
	                <br/><br/>

	                <label for='abstract'>Short news content (up to 50 characters):</label>
	                <br/>
	                <textarea name='abstract' type='text' class='abstract' style='width:400px;height:70px;padding:7px;'>".$row['abstract']."</textarea>
	                <br/><br/>

	                <label for='text'>News content:</label>
	                <br/>
	                <textarea name='text' style='width:400px;height:180px;padding:7px;'>".$row['text']."</textarea>
	                <br/><br/>

	                <label for='image'>Image</label>
	                <br/>
	                <img src='img/".$row['image']."' style='width:150px;' />
	                <br/>
	                <input name='image' type='file' value='".$row['image']."'>
	                <br/><br/>

	                <label for='category'>category news:</label><br/>
	                <select name='category' class='form-field-textual' style='width:240px;height:30px;padding-left:5px;margin-top:5px;'>
										<option value='".$row['category']."' disabled selected>".$row['category']."</option>
										<option value='world'>world</option>
										<option value='economic'>economic</option>
	                </select>
	                <br/><br/>
	              ";

	            if($row['storage'] == 0) {
	              echo "Save to archive?
	              <input type='checkbox' name='storage' class='option' value='option'>";
	            } else {
	              echo "Članak je u arhivi.
	              <input type='checkbox' name='storage' class='option' value='option' checked>";
	            }

	          	echo "
		            <br/><br/><br/>
		            <input type='hidden' name='id' class='form-field-textual' value='".$row['id']."'>
		            <input type='reset' style='padding:5px 10px;' value='Undo' />
		            <input name='update' type='submit' style='padding:5px 10px;margin-left:10px;' value='Accept' />
		            <input name='delete' type='submit' style='padding:5px 10px;margin-left:10px;' value='Delete' />
	          	</form><br/><br/>";
	          }
	        } else if ($uspjesnaLOGIN == true && $admin == false) {
						echo '<div class="welcome_nadmin"><p>Hello, <span>' . $nameusera . '</span>!<br/><br/>You have successfully logged in but you are not an administrator so do not have sufficient access rights to this page.<br/><br/><br/></p></div>';
 					} else if (isset($_SESSION['username']) && $_SESSION['level'] == 0) {
 						echo '<div class="welcome_nadmin"><p>Hello, <span>' . $_SESSION['$username'] . '</span>!<br/><br/>You have successfully logged in but you are not an administrator so do not have sufficient access rights to this page.<br/><br/><br/></p></div>';
 					}
				} else if ($uspjesnaLOGIN == false) {
					header('Location: login.php');
				}

        if(isset($_POST['delete'])) {
          $id = $_POST['id'];
          $query = "DELETE FROM news WHERE id=$id";
          $result = mysqli_query($dbc, $query);
        }

        if(isset($_POST['update'])) {
					$title = $_POST['title'];
			    $abstract = $_POST['abstract'];
			    $text = $_POST['text'];
			    $category = $_POST['category'];
			    $image = $_FILES['image']['name'];
			    $tempimage = $_FILES['image']['tmp_name'];
					$id=$_POST['id'];
			    if (isset($_POST['storage'])) {
			      $storage = 1;
			    } else {
			      $storage = 0;
			    }

			    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name']);

					$query = "UPDATE news SET title='$title', abstract='$abstract', text='$text', image='$image', category='$category', storage='$storage' WHERE id=$id";
			    $result = mysqli_query($dbc,$query) or die('Error querying database.');
        }
      ?>
    </div>
  </div>

  <footer>
		<div class="wrapper">
      <br/><p>Exercises in <i>Cloud computing</i></p>
      <br/><p>Author Project <b>Your Name</b><br/>example@gmail.com</p>
			<br/><p>Year of release: 2024.</p>
    </div>
  </footer>
</body>
</html>
