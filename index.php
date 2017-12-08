<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Nom application</title>
	<link href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<script src="./jQuery/jquery-1.10.2.js"></script>
    <script src="./jQuery/jquery-ui-1.11.4.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</head>

<body>

<!-- Menu -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Nom application</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul id="aide" class="nav navbar-nav navbar-right">
      	<li><img id="bulle-aide" src="./image/mascotte/bulleAide.png"></li>
        <li><img id="img-avatar" src="./image/mascotte/avatar.gif"></li>
      </ul>
    </div>
  </div>
</nav>

<section>
	<div class="row">
		<div class="col-md-4">
			<a href="./php/gestes.php">
				<img src="image/image-not-found.gif">
			</a>
		</div>
		<div class="col-md-4">
			<a href="./php/appel.php">
				<img src="image/image-not-found.gif">
			</a>
		</div>
		<div class="col-md-4">
			<a href="./php/game.php">
				<img src="image/image-not-found.gif">
			</a>
		</div>
	</div>
</section>

<?php
include './php/footer.html';
?>

<!-- Pied de page -->
<footer>
	<div class="row">
		<div class="col-md-4">
			Telephone
		</div>
		<div class="col-md-4">
			Police
		</div>
		<div class="col-md-4">
			Mail
		</div>
	</div>
</footer>

</body>
</html>	