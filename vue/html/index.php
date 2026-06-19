<!doctype html>
<html lang="fr" class="theme-calme">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SweetLife</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Cormorant+Garamond&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/vue/css/note.css" />
    <link rel="stylesheet" href="/vue/css/footer.css" />
    <link rel="stylesheet" href="/vue/css/element-theme.css" />
    <link rel="stylesheet" href="/vue/css/theme.css" />
    <link rel="stylesheet" href="/vue/css/position-cercle-emojis.css" />
    <link rel="stylesheet" href="/vue/css/theme-initial.css" />
    <link rel="stylesheet" href="/vue/css/navbar.css" />
    <link rel="stylesheet" href="/vue/css/style.css" />
</head>

<body class="theme-calme">

    <?php include(__DIR__ . '/navbar.php'); ?>

    <main>
        <section class="hero">
            <article class="hero-content">

                <img class="mobile-logo" src="/vue/image/logo.png" alt="logo" />

                <section class="centrer">
                    <h1>
                        Comment vas-tu aujourd'hui
                        <span class="couleur">
                            <?php if (isset($_SESSION['user'])): ?>
                            <?= $_SESSION['user']['prenom']; ?> <?= $_SESSION['user']['nom']; ?> !
                            <?php else: ?>
                            Invité !
                            <?php endif; ?>
                        </span>
                    </h1>

                    <p>Choisis ton humeur pour recevoir des recommandations.</p>

                    <div class="alig">
                        <button class="btn-primary marg">
                            🌸 Choisir mon humeur
                            <a href=".mood-wheel">ici</a>
                        </button>

                        <button class="btn-ghost">
                            <a href="oubli.html">😬 vous avez oublié de noter votre humeur</a>
                        </button>
                    </div>
                </section>

                <?php require_once __DIR__ . '/afficheHumeur.php'; ?>
    </main>

</body>

</html>