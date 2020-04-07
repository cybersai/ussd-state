<?php

namespace Cybersai\UssdState\Tests;

use Cybersai\UssdState\UssdState;
use PHPUnit\Framework\TestCase;

class UssdStateTest extends TestCase
{
    public function testBeforeRenderingIsCalledWhenRenderMethodIsCalledAndMenuResultIsReturned()
    {
        $state = $this->prophesize(UssdState::class);
        $state->beforeRendering()->shouldBeCalledOnce();
        $state->menu()->shouldBeCalledOnce()->willReturn('Menu Rendered');
        $this->assertEquals('Menu Rendered', $state->reveal()->render());
    }
}
