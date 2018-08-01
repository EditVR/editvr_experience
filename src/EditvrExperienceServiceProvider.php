<?php

namespace Drupal\fourkitchens_experience;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceModifierInterface;

/**
 * Enable CORS by default.
 */
class EditvrExperienceServiceProvider implements ServiceModifierInterface {
  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $cors_config = $container->getParameter('cors.config');
    $cors_config['enabled'] = TRUE;
    $container->setParameter('cors.config', $cors_config);
  }
}
