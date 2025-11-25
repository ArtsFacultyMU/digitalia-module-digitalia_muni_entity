<?php

declare(strict_types=1);

namespace Drupal\digitalia_muni_entity\Entity;

use Drupal\Core\Entity\RevisionableContentEntityBase;
use Drupal\digitalia_muni_entity\DigitaliaMuniCustomEntityInterface;

/**
 * Defines the digitalia muni custom entity entity class.
 *
 * @ContentEntityType(
 *   id = "digitalia_muni_entity",
 *   label = @Translation("Digitalia muni custom entity"),
 *   label_collection = @Translation("Digitalia muni custom entities"),
 *   label_singular = @Translation("digitalia muni custom entity"),
 *   label_plural = @Translation("digitalia muni custom entities"),
 *   label_count = @PluralTranslation(
 *     singular = "@count digitalia muni custom entities",
 *     plural = "@count digitalia muni custom entities",
 *   ),
 *   bundle_label = @Translation("Digitalia muni custom entity type"),
 *   handlers = {
 *     "list_builder" = "Drupal\digitalia_muni_entity\DigitaliaMuniCustomEntityListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "access" = "Drupal\digitalia_muni_entity\DigitaliaMuniCustomEntityAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\digitalia_muni_entity\Form\DigitaliaMuniCustomEntityForm",
 *       "edit" = "Drupal\digitalia_muni_entity\Form\DigitaliaMuniCustomEntityForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *       "delete-multiple-confirm" = "Drupal\Core\Entity\Form\DeleteMultipleForm",
 *       "revision-delete" = \Drupal\Core\Entity\Form\RevisionDeleteForm::class,
 *       "revision-revert" = \Drupal\Core\Entity\Form\RevisionRevertForm::class,
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\digitalia_muni_entity\Routing\DigitaliaMuniCustomEntityHtmlRouteProvider",
 *       "revision" = \Drupal\Core\Entity\Routing\RevisionHtmlRouteProvider::class,
 *     },
 *   },
 *   base_table = "digitalia_muni_entity",
 *   data_table = "digitalia_muni_entity_field_data",
 *   revision_table = "digitalia_muni_entity_revision",
 *   revision_data_table = "digitalia_muni_entity_field_revision",
 *   show_revision_ui = TRUE,
 *   translatable = TRUE,
 *   admin_permission = "administer digitalia_muni_entity types",
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "revision_id",
 *     "langcode" = "langcode",
 *     "bundle" = "bundle",
 *     "label" = "id",
 *     "uuid" = "uuid",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_uid",
 *     "revision_created" = "revision_timestamp",
 *     "revision_log_message" = "revision_log",
 *   },
 *   links = {
 *     "collection" = "/admin/content/digitalia-muni-entity",
 *     "add-form" = "/digitalia-muni-entity/add/{digitalia_muni_entity_type}",
 *     "add-page" = "/digitalia-muni-entity/add",
 *     "canonical" = "/digitalia-muni-entity/{digitalia_muni_entity}",
 *     "edit-form" = "/digitalia-muni-entity/{digitalia_muni_entity}",
 *     "delete-form" = "/digitalia-muni-entity/{digitalia_muni_entity}/delete",
 *     "delete-multiple-form" = "/admin/content/digitalia-muni-entity/delete-multiple",
 *     "revision" = "/digitalia-muni-entity/{digitalia_muni_entity}/revision/{digitalia_muni_entity_revision}/view",
 *     "revision-delete-form" = "/digitalia-muni-entity/{digitalia_muni_entity}/revision/{digitalia_muni_entity_revision}/delete",
 *     "revision-revert-form" = "/digitalia-muni-entity/{digitalia_muni_entity}/revision/{digitalia_muni_entity_revision}/revert",
 *     "version-history" = "/digitalia-muni-entity/{digitalia_muni_entity}/revisions",
 *   },
 *   bundle_entity_type = "digitalia_muni_entity_type",
 *   field_ui_base_route = "entity.digitalia_muni_entity_type.edit_form",
 * )
 */
final class DigitaliaMuniCustomEntity extends RevisionableContentEntityBase implements DigitaliaMuniCustomEntityInterface {

}
