<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
	<title>LOGIN</title>
	<style>
    .main {
      height: 350px;
      padding-top: 50px;
    }
    input {
      width: 96%;
      height: 25px;
      padding: 3px 4px 3px 10px;
      margin-bottom: 7px;
			box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;
			border: none;
			border-radius: 3px;
    }
    .main p {
      margin-top: 10px;
      margin-left: 20px;
      font-size: 18px;
      font-weight: bold;
      color: #EA212D;
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
			<?php
				if(isset($_SESSION['username'])) {
					echo "<a href='administration.php'>ADMINISTRATION</a>";
					echo "<a href='entrance.php'>ENTRANCE</a>";
					echo "<a href='logout.php'>LOGOUT</a>";
				} else {
					echo "<a href='register.php'>REGISTER</a>";
					echo "<a class='foc' href='login.php'>LOGIN</a>";
				}
			?>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
			<div class="log">
			<h2>LOGIN</h2>
      <form enctype="multipart/form-data" method="POST" action="">
				<input name="username" id="username" type="text" class="username" placeholder="name account" required/>
				<br/><span id="porukaUsername" class="bojaPoruke"></span>
				<br/>

				<input name="pass" id="password" type="password" class="pass" placeholder="password" required/>
				<br/><input type="checkbox" class="showpass" onclick="myFunction1()">Show password
				<br/><span id="porukaPass" class="bojaPoruke mes"></span>
        <br/>

        <input name="LOGIN" type="submit" class="LOGIN" id="LOGIN" value="LOGIN" />

        <?php
          include 'connect.php';

          if (isset($_POST['LOGIN'])) {
    	 			$LOGINnameusera = $_POST['username'];
    	 			$LOGINpasswordusera = $_POST['pass'];
    	 			$sql = "SELECT user_name, password, level FROM user WHERE user_name = ?";
    	 			$stmt = mysqli_stmt_init($dbc);
    	 			if (mysqli_stmt_prepare($stmt, $sql)) {
    	 				mysqli_stmt_bind_param($stmt, 's', $LOGINnameusera);
    	 				mysqli_stmt_execute($stmt);
    	 				mysqli_stmt_store_result($stmt);
    	 			}
    	 			mysqli_stmt_bind_result($stmt, $nameusera, $passwordusera, $levelusera);
    	 			mysqli_stmt_fetch($stmt);

    	 			if (password_verify($_POST['pass'], $passwordusera) && mysqli_stmt_num_rows($stmt) > 0) {
    	 				$uspjesnaLOGIN = true;
    	 				if($levelusera == 1) {
    	 					$admin = true;
    	 				} else {
    	 					$admin = false;
    	 				}

    	 				$_SESSION['username'] = $nameusera;
    	 				$_SESSION['level'] = $levelusera;
              header('Location: administration.php');
    	 			} else {
    	 				$uspjesnaLOGIN = false;
              echo '<p>LOGIN nije uspjela!</p>';
    	 			}
    			}
        ?>
      </form></div>
    </div>
  </div>

  <footer>
		<div class="wrapper">
      <br/><p>Exercises in <i>Cloud computing</i></p>
      <br/><p>Author Project <b>Your Name</b><br/>example@gmail.com</p>
			<br/><p>Year of release: 2024.</p>
    </div>
  </footer>
  <script src="reg.js"></script>
</body>
</html>
