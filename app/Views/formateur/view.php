<!-- view.php -->
<h2><?= esc($title) ?></h2>

<?php if (!empty($formateur)) : ?>
    <h3><?= esc($formateur['NOM']) ?></h3>
    <p><?= esc($formateur['PRENOM']) ?><br><?= esc($formateur['EMAIL']) ?></p>
<?php else : ?>
    <h3>Formateur introuvable</h3>
    <p>Le formateur que vous cherchez n'existe pas.</p>
<?php endif ?>