<?php

/* TRUNCATE TABLE `table` */
require ("../inc/config.php");

$requete = $bdd -> prepare("TRUNCATE TABLE 'aticles'");
$requete->execute();

$titles = ["Bottle", "Bread", "Phone", "Peer", "Mouse", "Easy"];
$autors = ["Jean_Jaque", "Albert", "Kim", "Tim", "Abrahim", "Oussem"];

$date_to_up = new DateTime();

for($i = 1;$i <=200; $i++){
    shuffle($arrayAuteur);
    shuffle($arrayTitre);
    $date_to_up->modify('+'.$i.' day');
    $requete = $bdd->prepare('INSERT INTO articles (Titre, Description, DatePublication, Auteur) 
    VALUES(:Titre, :Description, :DatePublication, :Auteur)');;
    $requete->execute([
        'Titre' => $arrayTitre[0]
        ,'Description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).'
        ,'DatePublication' => $date_to_up->format('Y-m-d')
        ,'Auteur' => $arrayAuteur[0]
    ]);
}
?>

