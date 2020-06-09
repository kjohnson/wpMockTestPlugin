<?php declare(strict_types=1);

class ExampleTest extends \WP_Mock\Tools\TestCase {

    public function setUp(): void
    {
      \WP_Mock::setUp();
    }

    public function tearDown():void
    {
      \WP_Mock::tearDown();
    }
    
    public function testExample()
    {

      \WP_Mock::expectAction( 'my_action', 'foo' );

      $result = myFunction();

      $this->assertTrue( $result );
    }
}
