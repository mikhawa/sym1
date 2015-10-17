<?php

// src/AppBundle/MesClasses/CreateSlug.php
namespace AppBundle\MesClasses;

/**
 * Description of CreateSlug
 *
 * @author Family PITZ
 */
class CreateSlug {
    public function slugify($chaine)
    {
        // comme nous passons dans notre exemple par l'URL, transformons en utf8 notre contenu
        $retour = utf8_decode($chaine);
        // remplace les caractères accentués par leur version non accentuée
        $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ 
ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ'; 
        $b = 'aaaaaaaceeeeiiiidnoooooouuuuy 
bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $retour = strtr( $retour,  utf8_decode($a),$b );

        // remplace les caractères non standards
        $retour = preg_replace(
                array(
                    '`^[^A-Za-z0-9]+`',
                    '`[^A-Za-z0-9]+$`',
                    '`[^A-Za-z0-9]+`' ),
                array('','','-'),
                $retour );

        return $retour;
    }
}
