<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Nom application</title>
	<link href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/style.css" rel="stylesheet" media="screen">
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
	        <li><a href="#">Inscription</a></li>
	        <li><a href="#">Connexion</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<section>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="post" action="./script/GestionConnexion.php">
				  <div class="form-group">
				    <label for="mailUser">Adresse mail</label>
				    <input name="emailUser" type="email" class="form-control" id="mailUser" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="passwordUser">Mot de passe</label>
				    <input name="passwordUser" type="password" class="form-control" id="passwordUser" placeholder="Mot de passe">
				  </div>
				  <button type="submit" class="btn btn-default">Connexion</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</section>

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
