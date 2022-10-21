<?php

namespace Drupal\annuaire\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a "Annuaire' Block.
 * 
 * @Block(
 *  id = "annuaire_block",
 *  admin_label = @Translation("Annuaire Block"),
 *  category = @Translation("Annuaire"),
 * )
 */
class AnnuaireBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $annuaireService = \Drupal::service('annuaire.service');
        $salut = $annuaireService->hello();
        return array(
            '#theme' => 'my_template',
            '#version' => 'Drupal 9',
            '#data' => [
                'salut' => $salut,
            ],
        );
    }
}