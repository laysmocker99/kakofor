<h2><?= esc($title) ?></h2>

<button><a href='session/ajouter'>ajouter une session</a></button>



<?php if (!empty($session) && is_array($session)) : ?>
    <table border="2" cellpadding="5">
        <?php foreach ($session as $session_item) : ?>

            <td>
                <h3><?= esc($session_item->DATE_DEBUT) ?></h3>
            </td>

            <td>
                <div class="main">
                    <?= esc($session_item->DATE_FIN) ?>
            </td>

            <td>
                <div class="main">
                    <?= esc($session_item->ID_FORMATION) ?>
            </td>

            <td>
                </div>

                <button><a href="/session/view/<?= esc($session_item->ID_SESSION, 'url') ?>">Fiche de la session</a></button>
                <button><a href="/session/supprimer/<?= esc($session_item->ID_SESSION, 'url') ?>">X</a></button>
                <button><a href='session/modifier'>modifier une session</a></button>

            </td>
            <tr>

            </tr>
        <?php endforeach ?>
    </table>
<?php else : ?>

    <h3>Aucune session enregistré</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>