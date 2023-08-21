<h2><?= esc($title) ?></h2>

<button><a href='formation/ajouter'>ajouter une formation</a></button>



<?php if (!empty($formation) && is_array($formation)) : ?>
    <table border="2" cellpadding="5">
        <?php foreach ($formation as $formation_item) : ?>

            <td>
                <h3><?= esc($formation_item['NOM']) ?></h3>
            </td>

            <td>
                <div class="main">
                    <?= esc($formation_item['CODE']) ?>
            </td>

            <td>
                </div>

                <button><a href="/formation/view/<?= esc($formation_item['ID_FORMATION'], 'url') ?>">Fiche de la formation</a></button>
                <button><a href="/formation/supprimer/<?= esc($formation_item['ID_FORMATION'], 'url') ?>">X</a></button>
                <button><a href='formation/modifier'>modifier une formation</a></button>

            </td>
            <tr>

            </tr>
        <?php endforeach ?>
    </table>
<?php else : ?>

    <h3>Aucune formation enregistré</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>