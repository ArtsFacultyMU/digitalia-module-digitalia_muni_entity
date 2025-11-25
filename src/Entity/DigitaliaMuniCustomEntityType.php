<?php

declare(strict_types=1);

namespace Drupal\digitalia_muni_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Digitalia muni custom entity type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "digitalia_muni_entity_type",
 *   label = @Translation("Digitalia muni custom entity type"),
 *   label_collection = @Translation("Digitalia muni custom entity types"),
 *   label_singular = @Translation("digitalia muni custom entity type"),
 *   label_plural = @Translation("digitalia muni custom entities types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count digitalia muni custom entities type",
 *     plural = "@count digitalia muni custom entities types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\digitalia_muni_entity\Form\DigitaliaMuniCustomEntityTypeForm",
 *       "edit" = "Drupal\digitalia_muni_entity\Form\DigitaliaMuniCustomEntityTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\digitalia_muni_entity\DigitaliaMuniCustomEntityTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer digitalia_muni_entity types",
 *   bundle_of = "digitalia_muni_entity",
 *   config_prefix = "digitalia_muni_entity_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/digitalia_muni_entity_types/add",
 *     "edit-form" = "/admin/structure/digitalia_muni_entity_types/manage/{digitalia_muni_entity_type}",
 *     "delete-form" = "/admin/structure/digitalia_muni_entity_types/manage/{digitalia_muni_entity_type}/delete",
 *     "collection" = "/admin/structure/digitalia_muni_entity_types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   },
 * )
 */
final class DigitaliaMuniCustomEntityType extends ConfigEntityBundleBase {

  /**
   * The machine name of this digitalia muni custom entity type.
   */
  protected string $id;

  /**
   * The human-readable name of the digitalia muni custom entity type.
   */
  protected string $label;

}
