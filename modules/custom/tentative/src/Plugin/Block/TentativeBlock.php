<?php

namespace Drupal\tentative\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a "Tentative' Block.
 * 
 * @Block(
 *  id = "tentative_block",
 *  admin_label = @Translation("Tentative Block"),
 *  category = @Translation("Tentative"),
 * )
 */
class TentativeBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $tentativeService = \Drupal::service('tentative.service');
        $salut = $tentativeService->hello();
        return array(
            '#theme' => 'my_template',
            '#version' => 'jour de la pizza',
            '#data' => [
                'salut' => $salut,
            ],
        );
    }
}