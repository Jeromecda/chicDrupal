<?php
namespace Drupal\documentation\Controller;

use StringTranslationTrait;
use Drupal\Core\Controller\ControllerBase;

class DocumentationController extends ControllerBase
{
    public function Start()
    {
        $documentationService = \Drupal::service('documentation.service');
        $services = $documentationService->callDocumentation();
        // dd($services);
        $element = array('#markup' => 'Ceci est un bloc pour la Documentation du CHIC !');
        return $element;

        // return array(
        //     '#theme' => 'my_template',
        //     '#data' => [
        //         'salut' => $salut,
        //     ],
        // );
    }
}

?>