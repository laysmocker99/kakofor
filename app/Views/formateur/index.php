<h2><?= esc($title) ?></h2>

<?php if (!empty($formateurs) && is_array($formateurs)) : ?>

    <table border="2" cellpadding="5">
        <?php foreach ($formateurs as $formateur_item) : ?>
            <tr>
                <td>
                    <h3><?= esc($formateur_item['NOM']) ?></h3>
                </td>
                <td>
                    <div class="main">
                        <?= esc($formateur_item['PRENOM']) ?>
                    </div>
                </td>
                <td>
                    <?= esc($formateur_item['EMAIL']) ?>
                </td>
                <td>
                    <p><a href="/formateur/<?= esc($formateur_item['ID_FORMATEUR'], 'url') ?>">Fiche du formateur</a></p>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

<?php else : ?>
    <h3>Aucun formateur enregistré</h3>
<?php endif ?>