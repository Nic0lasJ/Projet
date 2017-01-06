function Personne(nom,prenom,age,professeur,etudiant){
	
	this.nom = nom;
	this.prenom = prenom;
	this.age = age;
	this.professeur = professeur;
	this.etudiant = etudiant;
	
Personne.prototype.presentation = function (){
	
	console.log("Bonjour, je m'apelle " + this.prenom + " " + this.nom + " et j'ai " + this.age + " ans" + " je suis  étudiant à la " + this.etudiant );
	
	}
Personne.prototype.presentationP = function (){
	
	console.log("Bonjour, je m'apelle " + this.prenom + " " + this.nom + " et j'ai " + this.age + " ans" + " je suis  enseignant de " + this.professeur );
	
	}	
	
	
Personne.prototype.etudiant = function (etudiant){
	
	this.etudiant.push(etudiant);
	
	}	
Personne.prototype.professeur = function (professeur){
	
	this.professeur.push(professeur);
	
	}

	
}

	function Etudiant(nom,prenom,age,etudiant){
		
		Personne.call(this.nom,prenom,age,etudiant);
		
	}
	
	function Professeur (nom,prenom,age,professeur){
		
		Personne.call(this.nom,prenom,age,professeur);
	
	}
	
Etudiant.prototype = Object.create(Personne.prototype);
Etudiant.prototype.constructor = Etudiant ; 

Professeur.prototype = Object.create(Personne.prototype);
Professeur.prototype.constructor = Professeur ; 

var nicolas = new Personne ("Jourdan","Nicolas",24,"","DTA");
var paul = new Personne ("Dupon", "Paul", 56,"Mathématique","" );
nicolas.presentation ();
paul.presentationP ();
console.log(nicolas);
console.log(paul);
nicolas.presentation.etudiant ();
paul.presentation

