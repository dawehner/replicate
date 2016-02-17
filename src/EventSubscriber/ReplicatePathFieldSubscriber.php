<?php

/**
 * @file
 * Contains \Drupal\replicate\EventSubscriber\ReplicatePathFieldSubscriber.
 */

namespace Drupal\replicate\EventSubscriber;

use Drupal\replicate\Events\ReplicateEntityFieldEvent;
use Drupal\replicate\Events\ReplicatorEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ReplicatePathFieldSubscriber implements EventSubscriberInterface {

  public function onPathClone(ReplicateEntityFieldEvent $event) {
    $field_item_list = $event->getFieldItemList();

    foreach ($field_item_list as $field_item) {
      $field_item->alias = NULL;
      $field_item->pid = NULL;
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return $events[ReplicatorEvents::replicateEntityField('path')][] = 'onPathClone';
  }

}
