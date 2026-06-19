<?php

require_once __DIR__ . '/bdd-config.php';

function ajouterHumeurUtilisateur($id_user, $id_humeur)
{
    global $conn;

    $sql = "INSERT INTO user_humeur (id_user, id_humeur, date_enregistrement)
            VALUES (?, ?, NOW())";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "ii", $id_user, $id_humeur);

    $resultat = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $resultat;
}