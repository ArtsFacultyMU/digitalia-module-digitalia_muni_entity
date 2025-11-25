<?php

declare(strict_types=1);

namespace Drupal\digitalia_muni_entity;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the digitalia muni custom entity entity type.
 *
 * phpcs:disable Drupal.Arrays.Array.LongLineDeclaration
 *
 * @see https://www.drupal.org/project/coder/issues/3185082
 */
final class DigitaliaMuniCustomEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account): AccessResult {
    if ($account->hasPermission($this->entityType->getAdminPermission())) {
      return AccessResult::allowed()->cachePerPermissions();
    }

    return match($operation) {
      'view' => AccessResult::allowedIfHasPermission($account, 'view digitalia_muni_entity'),
      'update' => AccessResult::allowedIfHasPermission($account, 'edit digitalia_muni_entity'),
      'delete' => AccessResult::allowedIfHasPermission($account, 'delete digitalia_muni_entity'),
      'delete revision' => AccessResult::allowedIfHasPermission($account, 'delete digitalia_muni_entity revision'),
      'view all revisions', 'view revision' => AccessResult::allowedIfHasPermissions($account, ['view digitalia_muni_entity revision', 'view digitalia_muni_entity']),
      'revert' => AccessResult::allowedIfHasPermissions($account, ['revert digitalia_muni_entity revision', 'edit digitalia_muni_entity']),
      default => AccessResult::neutral(),
    };
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL): AccessResult {
    return AccessResult::allowedIfHasPermissions($account, ['create digitalia_muni_entity', 'administer digitalia_muni_entity types'], 'OR');
  }

}
