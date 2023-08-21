<?php
// description: Transforme la date de anglais a francais en format jour-mois-années
// Paramètre : chaine de date a transformer (dateEn)
// Retourne :Chaine de date transformze

function dateEn2Fr($dateEn)
{
    $annee = substr($dateEn, 0, 4);
    $mois = substr($dateEn, 5, 2);
    $jour = substr($dateEn, 8, 2);
}
