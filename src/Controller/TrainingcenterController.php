<?php

namespace Drupal\trainingcenter\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Trainingcenter routes.
 */
class TrainingcenterController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
