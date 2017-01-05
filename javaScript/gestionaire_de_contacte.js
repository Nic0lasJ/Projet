var contact = {
  init: function (nom, prenom, mail, num){
    this.nom = nom;
    this.prenom = prenom;
    this.mail = mail;
    this.num = num;
  },
  decrire: function(){
    var contacts = this.nom + " " + this.prenom + " " + this.mail + " " + this.num;
    return contacts
  }
};

var contact1 = Object.create(contact);
contact1.init("JOURDAN", "Nicolas", "nicolas42500@hotmail.fr", "0626573706");

var contact2 = Object.create(contact);
contact2.init("HITACHI", "Sakura", "Sakura@gmail.com", "0626565478");

var contact3 = Object.create(contact);
contact3.init("WAREN", "Roberta", "RobertaWAWA@gamilk.com", "0752567847");

//Création du tableau contenant les contacts
var contacts=[];
contacts.push(contact1);
contacts.push(contact2);
contacts.push(contact2);

//Création du tableau conteant
var option = ["1 : Liste des contacts","2 : Ajouter un contact", "0 : Quitter"];

console.log ("Bienvenue dans le gestionnaire de contacts ! ");

while (choixUtilisateur !== 0) {
  for (var i = 0; i < option.length; i++) {
    consolo.log(option[i]);
  };
  var choixUtilisateur = Number(prompt("Choisisser une option : "));
  switch (choixUtilisateur){

    case 1:
          for (var i = 0; i < contacts.length; i++) {
            console.log ("Nom : " + contacts[i].nom + " Prénom : " + contacts[i].prenom + " Email : " + contacts[i].mail + "Numéros : " + contacts[i].num);
          };
          break;
    case 2:
        var nom = prompt("Entrer le nom de la personne");
        var prenom = prompt("Entrer le prenom de la personne");
        var nomContact = "contact" + contacts.length;
        nomContact = Object.create(contact);
        nomContact.init(nom, prenom, mail, num);
        contacts.push(nomContact);
        console.log("Le contact a bien était ajouter !");
        break;
    case 0:
        console.log("Au revoir !");
  }

}
