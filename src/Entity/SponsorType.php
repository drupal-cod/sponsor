<?php

namespace Drupal\sponsors\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Sponsor type entity.
 *
 * @ConfigEntityType(
 *   id = "sponsor_type",
 *   label = @Translation("Sponsor type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\sponsors\SponsorTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\sponsors\Form\SponsorTypeForm",
 *       "edit" = "Drupal\sponsors\Form\SponsorTypeForm",
 *       "delete" = "Drupal\sponsors\Form\SponsorTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\sponsors\SponsorTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "sponsor_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "sponsor",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/sponsor_type/{sponsor_type}",
 *     "add-form" = "/admin/structure/sponsor_type/add",
 *     "edit-form" = "/admin/structure/sponsor_type/{sponsor_type}/edit",
 *     "delete-form" = "/admin/structure/sponsor_type/{sponsor_type}/delete",
 *     "collection" = "/admin/structure/sponsor_type"
 *   }
 * )
 */
class SponsorType extends ConfigEntityBundleBase implements SponsorTypeInterface {

  /**
   * The Sponsor type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Sponsor type label.
   *
   * @var string
   */
  protected $label;

}
