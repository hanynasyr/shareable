<?php

namespace spec\RyanNielson\Shareable\Buttons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TwitterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RyanNielson\Shareable\Buttons\Twitter');
    }
    
    /*function it_should_render_a_string()
    {
        $render = $this->render();
        $render->shouldHaveType('string');
    }*/
}
