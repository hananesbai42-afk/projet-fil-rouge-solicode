<?php

$cartes = [
    [
        "image" => "img/remarques.png",
        "alt" => "Notes",
        "titre" => "Notez en 10 secondes",
        "description" => "Ajoutez une dépense ou un revenu avec le montant et la date sans perdre de temps."
    ],
    [
        "image" => "img/wallet.png",
        "alt" => "Portefeuille",
        "titre" => "Solde toujours à jour",
        "description" => "Votre solde est calculé automatiquement à chaque nouvelle entrée saisie."
    ],
    [
        "image" => "img/statistique.png",
        "alt" => "Statistiques",
        "titre" => "Graphiques clairs",
        "description" => "Voyez quelles catégories pèsent le plus sur votre budget en un simple coup d'œil."
    ]
];
require __DIR__ . '/index-template.php';
?>