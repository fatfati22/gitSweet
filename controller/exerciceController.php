<?php

require_once __DIR__ . '/../model/traitExercice.php';

$exercices = getAllExercices();

$pageTitle = "Exercices";


ob_start();

require_once __DIR__ . '/../vue/html/exercice.php';

$contenu = ob_get_clean();

require_once __DIR__ . '/../vue/layout/main.php';
