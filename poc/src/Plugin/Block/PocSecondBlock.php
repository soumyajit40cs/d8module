<?php

namespace Drupal\poc\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "soumyajit_poc2",
 *   admin_label = @Translation("soumyajit POC Block2")
 * )
 */
class PocSecondBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
   
	public function defaultConfiguration() {
		return [
		  'second_block_string' => $this->t('A default value. This block was created at %time', ['%time' => date('c')]),
		];
	}


	public function blockForm($form, FormStateInterface $form_state) {
			$form['poc_block2_ta'] = [
			  '#type' => 'textarea',
			  '#title' => $this->t('Description'),
			  '#description' => $this->t('This text will appear in the example block.'),
			  '#default_value' => $this->configuration['second_block_string'],
			];
		return $form;
	}
	
	
	public function blockSubmit($form, FormStateInterface $form_state) {
		$this->configuration['second_block_string'] = $form_state->getValue('poc_block2_ta');
	}
   
   
   
    public function build() {
			return [
			  '#markup' => $this->configuration['second_block_string'],
			];
	}

}
