<?php

/** @var array $exercices */
?>

<article class="mood-card glass-card">
    <p>💫 État émotionnel actuel</p>

    <section class="affichage-humeur">
        <span class="big-emoji">😌</span>
        <h3>Calme & Sereine</h3>
    </section>
</article>

<section>
    <h1 class="titre">🧘 Exercices</h1>
    <p class="sous-titre">
        Choisis un exercice selon ton humeur
    </p>
</section>

<section class="grille-exercices">

    <?php foreach ($exercices as $exercice): ?>

        <article class="carte-exercice">

            <iframe width="100%" height="200"
                src="https://www.youtube.com/embed/<?= htmlspecialchars($exercice['video']) ?>" allowfullscreen>
            </iframe>

            <div class="contenu-exercice">

                <h2 class="titre-exercice">
                    <?= htmlspecialchars($exercice['titre']) ?>
                </h2>

                <p class="texte-exercice">
                    <?= htmlspecialchars($exercice['description']) ?>
                </p>

                <div class="etiquettes">

                    <span class="etiquette">
                        <?= (int)$exercice['duree'] ?> min
                    </span>

                    <span class="etiquette">
                        <?= htmlspecialchars($exercice['humeur']) ?>
                    </span>

                </div>

            </div>

        </article>

    <?php endforeach; ?>

</section>