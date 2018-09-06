<?php

namespace Drupal\poc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "soumyajit_poc1",
 *   admin_label = @Translation("soumyajit POC Block")
 * )
 */
class PocFirstBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => t("This block's title is changed to uppercase. Any block title which contains 'uppercase' will also be changed to uppercase."),
    ];
  }

}
