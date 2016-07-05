<?php

namespace spec\Application\Military;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArmySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Application\Military\Army');
    }
}
