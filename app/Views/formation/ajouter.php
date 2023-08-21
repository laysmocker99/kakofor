<?php
// Appeler la bibliothèque de fonctions pour les formulaires
helper('form');
// Ouvrir la zone de formulaire :
// Les données seront traitées par la fonction ajouter
echo form_open('formation/ajouter');
// Définition d'un champ de regroupement fieldset
$data = [
    'style'     => 'width:70%; border:3px green dotted',
];
echo form_fieldset('Exemple de formulaire d\'insertion d\'une formation', $data);
// Création d'un tableau de deux colonnes pour les champs de formulaire et leurs labels
?>
<div id="main" style="font-family:tahoma; font-size:12pt; ">
    <table>
        <tr>
            <td width="33%">
                <?= form_label('Intitulé de la formation :', 'nom'); ?>
            </td>
            <?php
            // Le nom
            $data = [
                'name'      => 'nom',
                'id'        => 'nom',
                'type'     => 'text',
                'value'     => '',
                'maxlength' => '100',
                'size'      => '50',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ]; ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <td>
                <?= form_label('Code de la formation :', 'code'); ?>
            </td>
            <?php
            // Le code
            $data = [
                'name'      => 'code',
                'id'        => 'code',
                'type'     => 'text',
                'value'     => '',
                'maxlength' => '6',
                'size'      => '6',
                'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
            ];
            ?>
            <td><?= form_input($data); ?></td>
        </tr>
        <tr>
            <?php
            // Le bouton de soumission
            $data = [
                'name'      => 'soumettre',
                'id'        => 'soumettre',
                'value'     => 'Ajouter une formation ',
                'type'     => 'submit',
                'maxlength' => '100',
                'size'      => '25',
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
