<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\FacebookLike;

class ButtonsFacebookLikeTest extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->view = m::mock('Illuminate\View\Factory');
    }

    public function tearDown()
    {
        m::close();
    }

    public function testRenderExists()
    {
        $facebookLike = new FacebookLike($this->view);
        $this->assertTrue(method_exists($facebookLike, 'render'),  'Class does not have method render');
    }
}