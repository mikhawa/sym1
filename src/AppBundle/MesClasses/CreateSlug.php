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
        // remplace les caractères accentués par leur version non accentuée
        $retour = strtr( $chaine,
                'ŠŽšžŸÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÚÛÜÝàáâãäåçèéêëìíîïñòóôõöøùúûüýÿ',
                'SZszYAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy' );

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
