<?php	session_start(); ?>

<?php if (!isset($_SESSION['idUser'])): ?>
<?php		header("location: index.php"); ?>
<?php else: ?>
<?php $link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($link, "NuitInfo");

$user = mysqli_query($link, 'SELECT * FROM user WHERE id="'.$_SESSION['idUser'].'"'); 

if ($user->num_rows > 0) {
	while($row = $user->fetch_assoc()) {
		$nUser = $row;
	}
}

?>


<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Nom application</title>
	<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="style.css" rel="stylesheet" media="screen">
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
	        <li><a href="#"> <?php echo $nUser['prenom']." ".$nUser['nom']; ?></a></li>
	        <li><a href="./formModifUser.php">Profil</a></li>
	        <li><a href="./script/logout.php">Déconnexion</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

<?php endif ?>