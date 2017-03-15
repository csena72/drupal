<?php

namespace Drupal\noticias\Controller;

/**
 * 
 */
class NoticiasController
{
   /* 
    function __construct(argument)
    {
        # code...
    }*/

    function description()
    {
        $build = array(
            '#type' => 'markup',
            '#markup' => '<p>'. t('Noticias ofrece un bloque en el que se mostraran las noticicas').'</p>',
        );
        return $build;
    }

    function getNoticia($idNoticia, $vista)
    {
        $build = array(
            '#type' => 'markup',
            '#markup' => '<p>'. t('Esta es la página que muestra noticias con la noticia con id ').'<strong>'.$idNoticia.'</strong>'. t(' y con la vista ').'<strong>'.$vista.'</strong>'.'</p>',
        );
        return $build;
    }
}
