<?php

require_once __DIR__ . '/../model/traitrepas.php';

$repas = getTousLesRepas();

$pageTitle = 'Repas';

$mainClass = '';




ob_start();
require_once __DIR__ . '/../vue/html/repas.php';
$contenu = ob_get_clean();

require_once __DIR__ . '/../vue/layout/main.php';
