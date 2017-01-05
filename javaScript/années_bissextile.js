var annee = prompt('Année ?');

if (annee%400 === 0 || (annee%4 === 0 && annee%100 !== 0))
 {
   alert("Cette année est bissextile.");
 }
else
 {
   alert("Cette année n'est pas bissextile");
 }
