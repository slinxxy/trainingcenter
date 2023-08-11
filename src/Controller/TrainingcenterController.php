<?php

/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\Trainingcenter\Controller;

use Drupal\Core\Controller\ControllerBase;

class TrainingcenterController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}