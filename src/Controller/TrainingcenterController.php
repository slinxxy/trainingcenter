<?php

/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\Trainingcenter\Controller;

use Drupal\Core\Controller\ControllerBase;

class TrainingcenterController extends ControllerBase {
  public function content($name) {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello @name', array('@name' => $name)),
    );
  }
}