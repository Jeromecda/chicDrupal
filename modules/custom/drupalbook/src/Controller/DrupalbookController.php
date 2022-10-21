<?php
namespace Drupal\drupalbook\Controller;

use StringTranslationTrait;

class DrupalbookController
{
    public function content()
    {
        $element = array('#markup' => 'Mon premier module sur Drupal 9');
        return $element;
    }
}
?>