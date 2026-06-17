<?php
// Vue repas
?>

<input type="radio" name="type" id="all" checked>
<input type="radio" name="type" id="entree">
<input type="radio" name="type" id="plat-principale">
<input type="radio" name="type" id="dessert-fruit">
<input type="radio" name="type" id="snack">

<article class="mood-card glass-card">
    <p>💫 État émotionnel actuel</p>

    <section class="affichage-humeur">
        <span class="big-emoji">😊</span>
        <h3>Repas adaptés à ton humeur</h3>
    </section>
</article>

<h1>🥗 Repas</h1>
<p class="sous-titre couleur">
    Des repas adaptés à ton humeur.
</p>

<section class="banniere">
    <span>🌸</span>
    <div>
        <h3>Repas recommandés</h3>
        <p class="couleur bold">
            Des plats équilibrés pour ton bien-être.
        </p>
    </div>
</section>

<section class="filtres">
    <label for="all">🌿 Tous</label>
    <label for="entree">☀️ Entrée</label>
    <label for="plat-principale">🌤 Plat principal</label>
    <label for="dessert-fruit">🌙 Dessert / Fruit</label>
    <label for="snack">🫐 Snack</label>
</section>

<section class="grille">

    <?php if (!empty($repas)): ?>

        <?php foreach ($repas as $r): ?>

            <article data-type="<?= htmlspecialchars($r['categorie'] ?? '') ?>">

                <img src="<?= htmlspecialchars($r['photo'] ?? '') ?>" alt="<?= htmlspecialchars($r['titre'] ?? '') ?>">

                <div class="contenu">

                    <h2>
                        <?= htmlspecialchars($r['titre'] ?? '') ?>
                    </h2>

                    <p>
                        <?= htmlspecialchars($r['description'] ?? '') ?>
                    </p>

                    <div class="etiquettes">

                        <span>
                            📂 <?= htmlspecialchars($r['categorie'] ?? '') ?>
                        </span>

                        <span>
                            🍽️ <?= htmlspecialchars($r['type'] ?? '') ?>
                        </span>

                        <span>
                            😊 <?= htmlspecialchars($r['humeur'] ?? '') ?>
                        </span>

                    </div>

                    <div class="statistiques">

                        <div>
                            <strong>
                                <?= htmlspecialchars($r['duree'] ?? '0') ?>
                            </strong>
                            <small>MIN</small>
                        </div>

                    </div>

                    <button type="button">
                        Ajouter
                    </button>

                </div>

            </article>

        <?php endforeach; ?>

    <?php else: ?>

        <article class="glass-card">
            <h2>Aucun repas trouvé</h2>
            <p>Aucun repas n'est disponible.</p>
        </article>

    <?php endif; ?>

</section>