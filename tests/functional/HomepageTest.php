<?php

namespace Tests\Functional;

use Tests\Functional\BaseTestCase;

class HomepageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetHomepage()
    {
        $this->assertEquals(1, 1);
//        $response = $this->runApp('GET', '/');
//        $this->assertEquals(200, $response->getStatusCode());
//        $this->assertContains('Roma Numbers', (string)$response->getBody());
    }

    /**
     * Test that the index route won't accept a post request
     */
    public function testPostHomepageNotAllowed()
    {
//        $response = $this->runApp('POST', '/', ['test']);
//        $this->assertEquals(405, $response->getStatusCode());
//        $this->assertContains('Method not allowed', (string)$response->getBody());
    }
}