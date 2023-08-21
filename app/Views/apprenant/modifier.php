<?php
// Appeler la bibliothèque de fonctions pour les formulaires
helper('form');
// Ouvrir la zone de formulaire :
// Les données seront traitées par la fonction ajouter
echo form_open('apprenant/modifier');
// Définition d'un champ de regroupement fieldset
$data = [
    'style'     => 'width:70%; border:1px gray solid',
];
echo form_fieldset('Exemple de formulaire d\'insertion d\'un apprenant', $data);
// Création d'un tableau de deux colonnes pour les champs de formulaire et leurs labels
?>
<div id="main" style="font-family:tahoma; font-size:12pt; ">
    <table>
        <tr>
            <td width="33%">
                <?= form_label('Nom de l\'apprenant :', 'nom'); ?>
            </td>
            <?php
            // Le nom
            $data = [
                'name'      => 'nom',
                'id'        => 'nom',
                'type'     => 'text',
                'value'     => esc($apprenant['NOM']),
                'maxlength' => '100',
                'size'      => '50',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ]; ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Prénom de l\'apprenant :', 'prenom'); ?>
            </td>
            <?php
            // Le prénom
            $data = [
                'name'      => 'prenom',
                'id'        => 'prenom',
                'type'     => 'text',
                'value'     => esc($apprenant['PRENOM']),
                'maxlength' => '6',
                'size'      => '6',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ];
            ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Téléphone :', 'prenom'); ?>
            </td>
            <?php
            // Le téléphone
            $data = [
                'name'      => 'telephone',
                'id'        => 'telephone',
                'type'     => 'text',
                'value'     => esc($apprenant['TELEPHONE']),
                'maxlength' => '10',
                'size'      => '12',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ];
            ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Email :', 'prenom'); ?>
            </td>
            <?php
            // L'adresse email
            $data = [
                'name'      => 'email',
                'id'        => 'email',
                'type'     => 'text',
                'value'     => esc($apprenant['EMAIL']),
                'maxlength' => '50',
                'size'      => '50',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ];
            ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Ville de résidence :', 'prenom'); ?>
            </td>
            <?php
            // La ville
            foreach ($ville as $laVille) {
                $nico = $laVille['id_ville'];
                $coni = $laVille['Ville'];
                $options[$nico] = $coni;
            }
            $data = [
                'name'      => 'ville',
                'id'        => 'ville',
                'style'     => 'border:3px solid green; height:28px; border-radius:5px;',
            ];
            ?>
            <td><?= form_dropdown($data, $options, $apprenant['ID_VILLE']); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Statut de l\'apprenant:', 'statut'); ?>
            </td>
            <?php
            // Le statut
            $data = [
                'name'      => 'statut',
                'id'        => 'staut',
                'style'     => 'border:1px solid blue; height:28px; border-radius:5px;',
            ];
            $options = [
                'Demandeur emploi'      => 'Demandeur(se) d\'emploi',
                'Salarie'        => 'Salarié(e)',
                'Etudiant'     => 'Etudiant(e)',
            ];
            ?>
            <td><?= form_dropdown($data, $options,); ?></td>
        </tr>
        <tr>
        <tr>
            <td>
                <?= form_label('Session d\'inscription :', 'session'); ?>
            </td>
            <?php
            // La session
            $options = [];
            foreach ($session as $laSession) {
                $nico = $laSession['ID_SESSION'];
                $coni = $laSession['Formation'] . " (" . $laSession['DATE_DEBUT'] . "/" . $laSession['DATE_FIN'] . ")";
                $options[$nico] = $coni;
            }
            $data = [
                'name'      => 'session',
                'id'        => 'session',
                'style'     => 'border:1px solid orange; height:28px; border-radius:5px;',
            ];
            ?>
            <td><?= form_dropdown($data, $options, $apprenant['ID_SESSION']); ?></td>
        </tr>
        <tr>
            <?php
            // Le bouton de soumission
            $data = [
                'name'      => 'soumettre',
                'id'        => 'soumettre',
                'value'     => 'Modifier',
                'maxlength' => '100',
                'type'      => 'submit',
                'size'      => '50',
                'style'     => 'border:3px solid blue; height:28px; border-radius:5px;color:red;background-color:#dddddd; font-weight:600;text-align:center;font-size:14pt;cursor:pointer',
            ];
            ?>
            <td colspan="2" align="center"><?= form_input($data); ?></td>
        </tr>
    </table>
</div>
<?php
// On ferme la section de regroupement
echo form_fieldset_close();
// On ferme la zone de formulaire
echo form_close();
