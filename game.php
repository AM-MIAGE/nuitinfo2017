<html>


<head>

	<meta charset="UTF-8">
	<title>Sam ou pas Sam ?</title>
</head>


<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="./wheelnav.js-1.7.1/wheelnav.js"></script>
<script type="text/javascript" src="./wheelnav.js-1.7.1/raphael.min.js"></script>
<script type="text/javascript" src="./wheelnav.js-1.7.1/raphael.icons.min.js"> </script>

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
		$("#form").append('<input type="text" id="joueur' + (nbjoueur + 1) + '" autofocus > ');
		$("#form").append('<input type="button" id="addbuttonjoueur' + (nbjoueur + 1) +  '" onclick=\'addGamer("joueur'  + (nbjoueur + 1) +  '");\' value="Ajouter" />');
		$("#form").append('<input type="button" id="deletebuttonjoueur' + (nbjoueur + 1) +  '" onclick=\'deleteGamer("joueur' + (nbjoueur + 1) +  '");\' value="Retirer" style="display: none;" />');
		
		
		if(nbjoueur === 2 )
					$("#form").append('<input type="button" onclick="launchParty();" value="Lancer la partie !"> ');
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


	<h1>To drink or not to drink ?</h1>

	<article>

		<form novalidate="true" id="form">
			<input type="text" id="joueur1" autofocus > 
			<input type="button" id="addbuttonjoueur1" onclick='addGamer("joueur1");' value="Ajouter" /> 
			<input type="button" id="deletebuttonjoueur1" onclick='deleteGamer("joueur1");' value="Retirer" style="display: none;" />

		
		</form>
	
	
	</article>

	<div id="wheel" style="width: 300; height: 300;"></div>
</body>


</html>

