<h2><?= esc($title) ?></h2>
<button><a href="/apprenant/ajouter/">Ajouter un apprenant</a></button>


<?php if (!empty($apprenant) && is_array($apprenant)) : ?>

    <table border="2" cellpadding="5">
        <?php foreach ($apprenant as $apprenant_item) : ?>
            <td>
                <h3><?= esc($apprenant_item->NOM) ?></h3>
            </td>
            <td>
                <div class="main">
                    <?= esc($apprenant_item->PRENOM) ?>
                </div>
            </td>
            <td>
                <?= esc($apprenant_item->EMAIL) ?>
            </td>
            <td>
                <?= esc($apprenant_item->TELEPHONE) ?>
            </td>
            <td>
                <?= esc($apprenant_item->VILLE) ?>
            </td>
            <td>
                <?= esc($apprenant_item->FORMATION) ?>
            </td>
            <td>
                <?= esc($apprenant_item->DATE_DEBUT) ?>
            </td>
            <td>
                <button><a href="/apprenant/view/<?= esc($apprenant_item->ID_APPRENANT, 'url') ?>">Fiche de l'apprenant</a></button>
                <button><a href="/apprenant/supprimer/<?= esc($apprenant_item->ID_APPRENANT, 'url') ?>">X</a></button>
                <button><a href="/apprenant/modifier/<?= esc($apprenant_item->ID_APPRENANT, 'url') ?>">modifier</a></button>


            </td>
            </tr>
        <?php endforeach ?>
    </table>

<?php else : ?>

    <h3>Aucun apprenant enregistré</h3>
    <p>Unable to find any news for you.</p>

<?php endif ?>