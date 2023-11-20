<?php

$notes_apprenants = ["Mohamed" => "16", "Ahmed" => "14", "Rafika" => "13", "Aicha" => "15", "Samir" => "13"
, "Samar" => "13", "Rafik" => "10", "Samiha" => "09", "Fourat" => "07", "Sami" => "07", "Noura" => "14"];

$sort_note = asort($notes_apprenants);

echo "<table>
        <thead>
        <tr>
            <td>Prénom</td>
            <td>Note</td>
        </tr>
        </thead>";
foreach ($notes_apprenants as $prenom => $note){
    echo "<tr>
            <td>{$prenom}</td>
            <td>{$note}</td>
        </tr>";
}
echo "</table>";


$achats = [
    "10:15" => [
        "Prenom" => "Fabien",
        "Prix" => 85,
        "Panier" => [
            "Fruits" => ["Kiwi", "Fraise", "Pomme"],
            "Legumes" => ["Salade", "PdT"]
        ]
    ],
    "10:25" => [
        "Prenom" => "Jérémy",
        "Prix" => 680,
        "Panier" => [
            "Fruits" => ["Oranges", "Lichi", "Ananas"],
            "Legumes" => ["Avocat", "Tomates"]
        ]
    ],
    "15:08" => [
        "Prenom" => "Thomas",
        "Prix" => 156,
        "Panier" => [
            "Fruits" => ["Clémentines", "Banane", "Pastèque"],
            "Legumes" => ["Carottes", "Concombres", "Courgettes"]
        ]
    ],
];

$prix_total = 0;

echo "<ul>";
foreach ($achats as $heures => $info){
    $prix_total += $info["Prix"];
    echo "<li>  </li>";
}
echo "<ul>";
echo "<p> Le chiffre d'affaire total pour cette transaction est de {$prix_total}</p>";


