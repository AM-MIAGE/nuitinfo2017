<html>


<head>
	<meta charset="utf-8">
	<title>J'ai trop le SAM !</title>
	<link href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/style.css" rel="stylesheet" media="screen">
	<script src="../jQuery/jquery-1.10.2.js"></script>
    <script src="../jQuery/jquery-ui-1.11.4.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>



<body>
<script type="text/javascript" src="../wheelnav.js-1.7.1/wheelnav.js"></script>
<script type="text/javascript" src="../wheelnav.js-1.7.1/raphael.min.js"></script>
<script type="text/javascript" src="../wheelnav.js-1.7.1/raphael.icons.min.js"> </script>

<script>

var joueurs = new Array();
var nbjoueur = 0;

function addGamer(idJoueur) {

	if($("#" + idJoueur).val().length > 0) {

		joueurs.push($("#" + idJoueur).val().toString());
		nbjoueur = nbjoueur + 1;
		$("#" + idJoueur).prop("disabled", true);
	
		$("#addbutton" + idJoueur).hide();
		$("#deletebutton" + idJoueur).show();
		$("#form").append("<br>");
		$("#form").append('<input class="form-control" type="text" id="joueur' + (nbjoueur + 1) + '" autofocus > ');
		$("#form").append('<input class="btn" type="button" id="addbuttonjoueur' + (nbjoueur + 1) +  '" onclick=\'addGamer("joueur'  + (nbjoueur + 1) +  '");\' value="Ajouter" />');
		$("#form").append('<input class="btn btn-danger" type="button" id="deletebuttonjoueur' + (nbjoueur + 1) +  '" onclick=\'deleteGamer("joueur' + (nbjoueur + 1) +  '");\' value="Retirer" style="display: none;" />');
		
		
		if(nbjoueur === 2 )
					$("#form").append('<input class="btn btn-primary" id="launch" type="button" onclick="launchParty();" value="Lancer la partie !"> ');
					
		if(nbjoueur > 2) {
			$("#launch").remove();
			$("#form").append('<input style="float:right;" class="btn btn-primary" id="launch" type="button" onclick="launchParty();" value="Lancer la partie !">');	
		}
		}
}

function deleteGamer(idJoueur) {
	var player = $("#" + idJoueur).val();
	var index = joueurs.indexOf(player.toString());
	joueurs.splice(index,1);
	
	$("#" + idJoueur).remove();
	$("#addbutton" + idJoueur).remove();
	$("#deletebutton" + idJoueur).remove();
	
	
}



function launchParty() {

	wheel = new wheelnav("wheel");
	wheel.slicePathFunction = slicePath().PieSlice;
	wheel.markerPathFunction = markerPath().DropMarker;
	wheel.markerAttr = { fill: '#333', stroke: '#333' };	
	
	
	wheel.markerEnable = true;
	wheel.colors = colorpalette.fractallove;
	wheel.createWheel(joueurs);
	
	var tmp = Math.floor((Math.random() * joueurs.length));
	wheel.navigateWheel(tmp);	

}
	
	

</script>

<!-- Menu -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">J'ai trop le SAM !</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul id="aide" class="nav navbar-nav navbar-right">
      	<li><img id="bulle-aide" src="../image/mascotte/bulleAide.png"></li>
        <li><img id="img-avatar" src="../image/mascotte/avatar.gif"></li>
      </ul>
    </div>
  </div>
</nav>

	<h1>To drink or not to drink ?</h1>

	<article>
<div class="container">
		<form novalidate="true" id="form">
		<div class="row">
			<input class="form-control" type="text" id="joueur1" autofocus > 
			</div>
			<div class="row">
				<input class="btn" type="button" id="addbuttonjoueur1" onclick='addGamer("joueur1");' value="Ajouter" /> 
			</div>
			
			
			<div class="row">
				<input class="btn btn-danger" type="button" id="deletebuttonjoueur1" onclick='deleteGamer("joueur1");' value="Retirer" style="display: none;" />
			</div>

		
		</form>
	
	</div>
	</article>

	<div id="wheel" style="width: 300; height: 300;"></div>

	<!-- Pied de page -->
<footer>
	<div class="row">
		<div class="col-md-4">
			Telephone
		</div>
		<div class="col-md-4">
			<a href="../php/aboutUs.php">A propos du site</a>
		</div>
		<div class="col-md-4">
			Mail
		</div>
	</div>
</footer>

<div id="aide-apparition">
	<img id="bulle-apparition" src="../image/mascotte/bulleGame.png">
	<img id="anim-apparition" src="../image/mascotte/dance.gif">
</div>
</body>


</html>

