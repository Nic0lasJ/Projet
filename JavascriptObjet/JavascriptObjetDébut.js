function Personne(nom,prenom,age){
	
	this.nom = nom;
	this.prenom = prenom;
	this.age = age;
	
	
	
Personne.prototype.presentation = function (){
	
	console.log("Bonjour, je m'apelle " + this.prenom + " " + this.nom + " et j'ai " + this.age + " ans");
	
	
}	
	
}
var nicolas = new Personne ("Jourdan","Nicolas",24 );
nicolas.presentation ();
console.log(nicolas)
