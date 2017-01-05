function alea (a,b){
	return Math.floor ((Math.random()*(b-a))+a);

}

function b(){
	var nbchoisi = prompt("Nombre choisi ? ")
	var min = 0;
	var max = 100;
	var rep = null;

	
	
	while(rep != nbchoisi ){
		
	var rep = alea (min,max);
	
	if (rep == nbchoisi){
		alert ("Bravo ! ");
		return 0 ; 
		
	}else{
		if (rep > nbchoisi){
			console.log("Plus petit ! ");
			max = rep;
		}else{
			console.log("Plus grand ! ");
			min = rep; 
		}
	}
}
}

b();




______________________________________________________________________________________

var tab_login = [];
var tab_pass = [];

function log (){
	var index = null;
	var login = prompt ("login ? ");
	var pass = prompt ("Mot de passe ? ");
	for (var i in tab_login){    /* parcour le tableau */
	 	if (tab_login[i] == login){
	 		index = i;
	 	}
	
}
if (index !== null){
	if (pass  == tab_pass[index]){
		alert ("Connextion ! ");
		return 0; 
	}else{
		alert ("Erreur ! ");
		return-1;
	}
	
}
else {
	tab_login.push(tab_login);
	tab_pass.push(pass);
}
return 0 
}
log();
	








