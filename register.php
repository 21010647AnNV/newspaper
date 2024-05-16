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
	<title>REGISTER</title>
	<style>
    .main {
      height: 620px;
      padding-top: 50px;
    }
    input {
			width: 96%;
      height: 25px;
      padding: 3px 4px 3px 10px;
			margin-bottom: 0px;
			box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;
			border: none;
			border-radius: 3px;
    }
		.bojaPoruke {
			color: #EA212D;
			position: absolute;
			text-align: center;
			margin-top: -8px;
		}
		.mes {
			margin-top: -18px;
		}
		.pass_mes {
			margin-top: 15px;
		}
		.showpass {
			width: 15px;
			height: 15px;
			margin: 15px 3px 0 8px;
			padding: 0;
			position: relative;
			box-shadow: none;
		}
    .main p {
    	position: absolute;
			top: 740px;
			left: 38%;
      font-size: 18px;
      font-weight: bold;
    }
		@media (max-width: 600px) {
			.main p {
				top: 920px;
				left: 25%;
	    }
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
			<a class="foc" href="register.php">REGISTER</a>
			<a href="login.php">LOGIN</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
			<div class="log">
			<h2>REGISTER</h2>
      <form enctype="multipart/form-data" method="POST" action="">
				<input name="name" id="name" type="text" class="name" placeholder="name" required/>
				<br/><span id="porukaname" class="bojaPoruke"></span>
        <br/><br/>

				<input name="lastname" id="lastname" type="text" class="name" placeholder="lastname" required/>
				<br/><span id="porukalastname" class="bojaPoruke"></span>
        <br/><br/>

        <input name="username" id="username" type="text" class="username" placeholder="name account" required/>
				<br/><span id="porukaUsername" class="bojaPoruke"></span>
				<br/><br/>

        <input name="pass" id="password" type="password" class="pass" placeholder="password" required/>
				<br/><input type="checkbox" class="showpass" onclick="myFunction1()">Show password
				<br/><span id="porukaPass" class="bojaPoruke mes"></span>
        <br/>

				<input name="pass" id="passwordRep" type="password" class="pass pass_mes" placeholder="password" required/>
				<br/><input type="checkbox" class="showpass" onclick="myFunction2()">Show password
				<br/><span id="porukaPassRep" class="bojaPoruke mes"></span>
        <br/>

        <input name="submit" type="submit" class="LOGIN" id="LOGIN" value="REGISTER" />
      </form></div>

      <?php
        $servername = "localhost";
        $username = "admin";
        $password = "@Neverdie1001";
        $basename = "NewsPaper";

        $dbc = mysqli_connect($servername, $username, $password, $basename) or
        die('Error connecting to MySQL server.'.mysqli_connect_error());

        if ($dbc && isset($_POST['submit'])) {
          $name = $_POST['name'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $password = $_POST['pass'];
          $hashed_password = password_hash($password, CRYPT_BLOWFISH);
          $level = 0;
          $registriranuser = false;

          $sql = "SELECT * FROM user WHERE user_name = ?";
          $stmt = mysqli_stmt_init($dbc);
          if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
          }
          if (mysqli_stmt_num_rows($stmt) > 0) {
            echo "<p style='color:#EA212D;font-weight:bold'>name account već postoji!</p>";
          } else {
            $sql = "INSERT INTO user (name, lastname,user_name, password, level) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $sql)) {
              mysqli_stmt_bind_param($stmt, 'ssssd', $name, $lastname, $username, $hashed_password, $level);
              mysqli_stmt_execute($stmt);
              $registriranuser = true;
            }
          }

          if($registriranuser == true) {
            echo '<p>The user has been successfully registered!</p>';
          }
        }

        mysqli_close($dbc);
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
  <script src="reg.js"></script>
</body>
</html>
