<?php

/**
 * @file
 * Contains \Drupal\replicate\ReplicateNodeSubscriber\ReplicateNodeSubscriber.
 */

namespace Drupal\replicate\ReplicateNodeSubscriber;

use Drupal\replicate\Events\ReplicateEntityEvent;
use Drupal\replicate\Events\ReplicatorEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ReplicateNodeSubscriber implements EventSubscriberInterface {

  public function onNodeClone(ReplicateEntityEvent $event) {
    /** @var \Drupal\node\NodeInterface $node */
    $node = $event->getEntity();
    $node->path->alias = NULL;
    $node->path->pid = NULL;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[ReplicatorEvents::replicateEntityEvent('node')][] = 'onNodeClone';
  }


}
