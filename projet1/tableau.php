<?php
$participants =["dagan","azonnandou","ouorou","dangboe"];
echo $dagan["0"];;
echo $azonnandou;
echo $ouorou;

//anncienne convention
//on peut impliquer des tableaux
echo $tableau2;
echo $nom_etudiant= "Désiré AZONNANDOU";
echo $filiere_etudiant="FASEG";
echo $note = ["math"=>20,"pct"=>19,"svt"=>15,"français"=>12];

echo $note["math"];
echo $note["pct"];
echo $note["svt"];
echo $note["français"];
echo "\n ma note en math:".$note["math"];
echo "\n ma note en pct:".$note["pct"];
echo "\n ma note en svt:".$note["svt"];
echo "\n ma note en français:".$note["français"];
$total = ($note["math"]+$note["pct"]+$note["svt"]+$note["français"]);
$moyenne = ($note["math"]+$note["pct"]+$note["svt"]+$note["français"])/4;
echo "\n ma note total:".$total;
echo "\n ma moyenne:".$moyenne;

?>

