<?php

require_once __DIR__ . '/bdd-config.php';

function getTousLesRepas()
{
    global $conn;

    $sql = "
        SELECT
            r.*,
            h.nom AS humeur,
            t.nom AS type,
            c.nom AS categorie
        FROM repas r
        LEFT JOIN humeur h ON r.id_humeur = h.id
        LEFT JOIN type_repas t ON r.id_type = t.id
        LEFT JOIN categorie c ON r.id_categorie = c.id
        ORDER BY r.date_creation DESC
    ";

    $resultat = mysqli_query($conn, $sql);

    $repas = [];

    if ($resultat) {
        while ($row = mysqli_fetch_assoc($resultat)) {
            $repas[] = $row;
        }
    }

    return $repas;
}
