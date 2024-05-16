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
  <title>ENTRANCE PODATAKA</title>
  <style>
    .main {
      height: 1150px;
    }
    h1 {
      text-align: center;
      padding: 35px 0;
    }
    textarea {
      width: 420px;
      height: 250px;
      margin-top: 5px;
      margin-bottom: 15px;
      padding: 9px 0 0 11px;
    }
    .abstract {
      height: 70px;
    }
    input {
      width: 290px;
      height: 35px;
      padding-left: 10px;
      margin-bottom: 15px;
    }
    .title, .category {
      width: 350px;
      height: 30px;
      margin-top: 5px;
      margin-left: 10px;
    }
    .image {
      width: 420px;
      margin-top: 10px;
    }
    .category {
      width: 190px;
      height: 35px;
      padding-left: 4px;
    }
    .option {
      width: 16px;
      height: 17px;
      margin-left: 5px;
    }
    .button_yes, .button_no {
      border: 1.5px solid black;
      width: 135px;
      height: 35px;
      margin-top: 20px;
      margin-left: 30px;
      background-color: #D9D9D9;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    	border-radius: 7px;
    }
    .button_yes:hover {
      background-color: #2EB82E;
      color: white;
    }
    .button_no:hover {
      background-color: #CC0000;
      color: white;
    }
    .bojaPoruke {
      margin-top: -10px;
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
			<a href="administration.php">ADMINISTRATION</a>
			<a class="foc" href="entrance.php">ENTRANCE</a>
			<a href="logout.php">LOGOUT</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
      <?php
      include 'connect.php';
      if(isset($_SESSION['username'])) {
      echo '<h1>CONTENT REGISTRATION FORM<br/>IN THE DATABASE</h1>
      <form enctype="multipart/form-data" method="POST" action="script.php">
        <label for="title" required>Title news:</label>
        <input name="title" id="title" type="text" class="title" required/>
        <span id="porukaTitle" class="bojaPoruke"></span>
        <br/><br/>

        <label for="abstract">Short news content (up to 100 characters):</label>
        <br/>
        <span id="porukaAbout" class="bojaPoruke"></span>
        <textarea name="abstract" id="abstract" type="text" class="abstract" required></textarea>
        <br/><br/>

        <label for="text">News content:</label>
        <br/>
        <span id="porukaContent" class="bojaPoruke"></span>
        <textarea name="text" id="text" required></textarea>
        <br/><br/>

        <label for="image">Image</label>
        <br/>
        <input name="image" id="image" type="file" class="image" required/>
        <span id="porukaimage" class="bojaPoruke"></span>
        <br/>

        <label for="category" required>category news:</label>

        <select name="category" id="category" class="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="WORLD">WORLD</option>
          <option value="ECONOMIC">ECONOMIC</option>
        </select>
        <span id="porukacategory" class="bojaPoruke"></span>
        <br/><br/>

        <label for="storage">Save to archive?</label>
        <input type="checkbox" name="storage" class="option" value="option">
        <br/>

        <input type="reset" class="button_no" value="Undo" />
        <input name="submit" type="submit" class="button_yes" id="slanje" value="Save" />
      </form>';
    }?>
    </div>
  </div>

  <footer>
    <div class="wrapper">
      <br/><p>Exercises in <i>Cloud computing</i></p>
      <br/><p>Author Project <b>Your Name</b><br/>example@gmail.com</p>
			<br/><p>Year of release: 2024.</p>
    </div>
  </footer>

  <script src="check.js"></script>
</body>
</html>
