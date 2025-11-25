<?php

declare(strict_types=1);

namespace Drupal\digitalia_muni_entity;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of digitalia muni custom entity type entities.
 *
 * @see \Drupal\digitalia_muni_entity\Entity\DigitaliaMuniCustomEntityType
 */
final class DigitaliaMuniCustomEntityTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row['label'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No digitalia muni custom entity types available. <a href=":link">Add digitalia muni custom entity type</a>.',
      [':link' => Url::fromRoute('entity.digitalia_muni_entity_type.add_form')->toString()],
    );

    return $build;
  }

}
