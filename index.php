<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Nom application</title>
	<link href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
</head>

<body>

<!-- Menu -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Nom application</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./php/signUp.php">Tete Avatar</a></li>
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