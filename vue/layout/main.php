<!doctype html>
<html lang="fr" class="theme-calme">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SweetLife<?= isset($pageTitle) ? ' – ' . htmlspecialchars($pageTitle) : '' ?></title>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Cormorant+Garamond:wght@300;400;500;600&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="/vue/css/admin.css" />

    <link rel="stylesheet" href="/vue/css/historique.css" />
    <link rel="stylesheet" href="/vue/css/filtre-repas.css" />
    <link rel="stylesheet" href="/vue/css/mise-en-page.css" />
    <link rel="stylesheet" href="/vue/css/theme-initial.css" />
    <link rel="stylesheet" href="/vue/css/element-theme.css" />
    <link rel="stylesheet" href="/vue/css/theme.css" />

    <link rel="stylesheet" href="/vue/css/footer.css" />
    <link rel="stylesheet" href="/vue/css/humeur.css" />
    <link rel="stylesheet" href="/vue/css/carte.css" />
    <link rel="stylesheet" href="/vue/css/authentification.css" />
    <link rel="stylesheet" href="/vue/css/modifProfil.css" />
    <link rel="stylesheet" href="/vue/css/note.css" />
    <link rel="stylesheet" href="/vue/css/oubli.css" />
    <link rel="stylesheet" href="/vue/css/position-cercle-emojis.css" />
    <link rel="stylesheet" href="/vue/css/profil.css" />
    <link rel="stylesheet" href="/vue/css/navbar.css" />
    <link rel="stylesheet" href="/vue/css/style.css" />



</head>

<body class="theme-calme">

    <?php include __DIR__ . '/../html/navbar.php'; ?>

    <main<?= !empty($mainClass) ? ' class="' . htmlspecialchars($mainClass) . '"' : '' ?>>
        <?= $contenu ?? ''; ?>
        </main>

        <footer class="glass-card">
            <img src="/vue/image/logo.png" alt="logo footer" />
            <p>site Public</p>
            <p>Panel admin V3.SweetLife2025</p>
        </footer>

        <?php if (!empty($pageScripts)): ?>
            <?php foreach ($pageScripts as $js): ?>
                <script src="/vue/js/<?= htmlspecialchars($js) ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
        <script src="/vue/js/theme.js"></script>
        <script src="/vue/js/animationCard.js"></script>
        <script src="/vue/js/filtre.js"></script>
</body>

</html>