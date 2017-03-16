<?php

namespace Drupal\noticias\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

/**
 *
 */
class NoticiasController extends ControllerBase
{
   
    function description()
    {
        $url = Url::fromRoute('block.admin_display');
        $block_admin_link = $this->l($this->t('Pagina de administración de bloques'), $url);
        
        $build = array(
            '#type' => 'markup',
            '#markup' => $this->t('<p>Noticias ofrece un bloque en el que se mostraran las noticicas</p><p>').$block_admin_link.'</p>',
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
