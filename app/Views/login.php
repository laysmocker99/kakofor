<?php
    // Appeler la bibliothèque de fonctions pour les formulaires
    helper('form');
    helper('my_helper');
    // Ouvrir la zone de formulaire :
    // Les données seront traitées par la fonction ajouter
    echo form_open('/autoriser');
    // Définition d'un champ de regroupement fieldset
    $data = [
        'style'     => 'width:70%; border:1px gray solid',
    ];

    ?>
    <div id="main" style="font-family:tahoma; font-size:12pt; ">
        <table>
           
            <tr>
                <td>
                    <?= form_label('Votre email :', 'prenom'); ?>
                </td>
                <?php
                // L'adresse email
                $data = [
                    'name'      => 'email',
                    'id'        => 'email',
                    'type'     => 'text',
                    'value'     => '',
                    'maxlength' => '50',
                    'size'      => '50',
                    'style'     => 'border:1px solid blue; height:22px; border-radius:5px;padding:4px; font-size:14pt',
                ];
                ?>
                <td><?= form_input($data); ?></td>
            </tr> 
            
            <tr>
                <td>
                    <?= form_label('Votre Mot de passe'); ?>
                </td>
                <?php
                // Le mot de passe
                $data = [
                    'name'      => 'password',
                    'id'        => 'password',
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
                    'value'     => 'Connexion',
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
