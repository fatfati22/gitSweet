<?php

require_once __DIR__ . '/bdd-config.php';

function getAllExercices()
{
    global $conn;

    $sql = "
        SELECT
            e.*,
            h.nom AS humeur
        FROM exercice e
        INNER JOIN humeur h
            ON e.id_humeur = h.id
        ORDER BY e.id DESC
    ";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
