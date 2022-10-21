<?php

namespace Drupal\documentation\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a "Astreinte' Block.
 * 
 * @Block(
 *  id = "documentation_block",
 *  admin_label = @Translation("Astreinte Block"),
 *  category = @Translation("Astreinte"),
 * )
 */
class AstreinteBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $astreinteService = \Drupal::service('astreinte.service');
        $salut = $astreinteService->hello();
        $services = $astreinteService->callAstreinte();
        return array(
            '#theme' => 'my_template',
            '#services' => $services,
            '#data' => [
                'salut' => $salut,
                'services' => $services,
            ],
        );
    }
}