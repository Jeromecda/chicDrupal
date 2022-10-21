<?php
namespace Drupal\tentative\Controller;

use StringTranslationTrait;
use Drupal\Core\Controller\ControllerBase;

class TentativeController extends ControllerBase
{
    public function Start()
    {
        $servicetest = \Drupal::service('tentative.service');
        $salut = $servicetest->hello();
        $element = array('#markup' => $salut);
        // return $element;
        return array(
            '#theme' => 'my_template',
            '#version' => 'jour de la pizza',
            '#test' => 'paragraphe de test',
        );
    }
}

?>