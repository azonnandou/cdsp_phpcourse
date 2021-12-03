<?php


/*$nom= $_POST["nom"];
 
$prenom = $_POST["prenom"];
 $adresse= $_POST["adresse"];
$telephone= $_POST["telephone"];
$email= $_POST["email"];
$motivation= $_POST["motivation"];
$cv=$_FILES["cv"];
$diplome=$_FILES["diplome"];*/

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) 
&& isset($_POST["telephone"]) && isset($_POST["email"]) && isset($_POST["motivation"]) 
&& isset ($_FILES["cv"]) && isset($_FILES["diplome"]))
{
    $nom= $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse= $_POST["adresse"];
    $telephone= $_POST["telephone"];
    $email= $_POST["email"];
    $motivation= $_POST["motivation"];
    $cv=$_FILES["cv"];
    $diplome=$_FILES["diplome"];
  
       // retourne  

       echo "hello";
       // bon

     
// sauvegarde des fichiers reçus
           
    // format des pèces à télécharger 
    var_dump($_FILES["cv"]);
    var_dump($_FILES["diplome"]);

    // testons si l'extension est autorisée

    $fileInfoCv = pathinfo($_FILES["cv"]['name']);
    $fileInfoDiplome = pathinfo($_FILES["diplome"]['name']);

    var_dump($_FILES["cv"]);
    var_dump($_FILES["diplome"]);

//recuerer les extensions
$extensionCv = $fileInfoCv['extension'];

$extensionDiplome = $fileInfoDiplome["extension"];

// liste des extensions autorisées
    $allowedCvExtensions= ['pdf', 'doc', 'docx'];
    $allowedDiplomeExtensions = ['pdf', 'doc', 'docx'];



if (!in_array($extensionCv, $allowedCvExtensions)){
    echo "Extension non autorisée";
    return;
}


if (!in_array($extensionDiplome,  $allowedDiplomeExtensions))

{
    echo "Extension non autorisée";
    return;
}

// valider le fichier et le stocker définitivement

//move_uploaded_file($_FILES['cv']['tmp_name'],'cvs/'. basename($_FILES['cv']['name']));
move_uploaded_file($_FILES['cv']['tmp_name'], 'cvs/'. basename($_FILES['cv']['name']));
//echo "bon dffdf4";

move_uploaded_file($_FILES['diplome']['tmp_name'], 'diplomes/'. basename($_FILES['diplome']['name']));




}

else { 
echo "error";
return;
}
/**
 * 1-intégrer boostrap
 * 2- crer un formulaire: nom, prenom,
 * adresse, telephone,
 * email, lettre de motivation (saisir), cv,
 * diplôme
 * postuler(de couleur bleu)
 * recuperer les données et les  afficher
 * à l'utilisateur 
 * 
 */

 /**
  * 





  */

?>