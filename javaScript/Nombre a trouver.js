var NB = Math.floor(Math.random()*50); // Nombre a deviner

var saisie = prompt("Le nombre à deviner est compris entre 1 et 50.");


console.log (NB);
	
function loto() {
	
	while (saisie != NB) {
		var saisie = prompt("Le nombre à deviner est compris entre 1 et 50.");
		if(saisie < NB) {
			alert("Plus grand");
		} else if(saisie > NB) {
			alert("Plus petit");
		}
	}
		alert("Bravo tu as trouvé !");
		}
		loto();
