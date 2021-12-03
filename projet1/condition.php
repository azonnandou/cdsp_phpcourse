<?php
// boucle if else
// /*Syntaxe: la condition est une variable booléenne
if(condition){action}
elseif(condition 2){action 2}
else{action par defaut}

/*Exercie
1ecrcire une boucle if else pour dire si selon l'age on est adulte ou mineur
2ajouter une sous condition pour tester si un mineur est ado
3 créer un tableau salutaton avec les données suivantes:
-bonjour
-bon après midi
-bonsoir bonne nuit
- créer une variable heure et donnez lui l'heure que vous vous voulez
ecrire la clause if else pour affficher un message par rapport à la variable heure
 /*Syntaxe: la condition est une variable booléenne
if(condition){action}
elseif(condition 2){action 2}
else{action par defaut}
*/
$salutation =["bonjour","bonsoir","bon après","bonsoir","bonne nuit"];
$heure = 15;

if($heure >=0 && $heure <12){

// Bonjour
echo $salutation[0];
}

elseif($heure >= 12 && $heure<15h){

//Bon apres midi
echo $salutation[1];
}
elseif($heure >= 15 && $heure <20){
echo $salutation[2];
}
 // Bonsoir

else{
 
//bonne nuit
echo $salutation[3];
}


/*les operantes ou de comparaison
>superieur
<inferieur
<=inferieur ou egal
>=superieur ou egal
==egal
===egal et de meme type
!=different
=== est un == qui en plus de 
ET et OU
&& ET
|| OU
(vrai) et (faux)=faux
(faux) et (vrai) =faux
(vrai) et (vrai) = vrai
(faux) et (faux) = faux

(vrai) ou (faux)=vrai
(faux) ou (vrai) =vrai
(vrai) ou (vrai) = vrai
(faux) ou (faux) = faux

*/

?>
