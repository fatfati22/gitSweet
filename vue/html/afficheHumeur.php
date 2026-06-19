<?php if (!empty($humeurs)) : ?>
<section class="mood-wheel">
    <?php foreach ($humeurs as $humeur) : ?>
    <button type="button" class="mood-btn" onclick="selectionnerHumeur(<?= $humeur['id'] ?>)" title="<?= htmlspecialchars($humeur['nom']) ?>">
        <?= htmlspecialchars($humeur['icone']) ?>
    </button>
    <?php endforeach; ?>
    <button class="mood-btn center">🌸</button>
</section>
<?php endif; ?>