<?php

namespace Drupal\sponsors\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Example test that passes to confirm that automated build can run unit tests.
 *
 * @group sponsors
 */
class SponsorsExampleTest extends WebTestBase {

  /**
   * A meaningless test to ensure that automated build is running simpletest.
   */
  public function testAutomatedBuild() {
    $this->assertTrue(TRUE);
  }

}
