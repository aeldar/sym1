<?php

namespace spec\Acme\DemoBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Symfony\Component\DependencyInjection\ContainerInterface;

class DemoControllerSpec extends ObjectBehavior
{

    function let(ContainerInterface $container)
    {
        $this->setContainer($container);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\DemoBundle\Controller\DemoController');
    }

    function it_should_respond_to_index_action()
    {
        $respond = $this->indexAction();

        $respond->shouldBeArray();
    }

}
