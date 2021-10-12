<?php

namespace spec\TimiTao\ValueObject\Deployment\Standard\Required\AbstractClass\ValueObject;

use PhpSpec\ObjectBehavior;
use TimiTao\ValueObject\Deployment\Standard\Required\AbstractClass\ValueObject\TestArrayValueObject;
use TimiTao\ValueObject\Deployment\Standard\Required\AbstractClass\ValueObject\TestArrayValueObjectInterface;
use TimiTao\ValueObject\Standard\Required\AbstractClass\ValueObject\ArrayValueObject;

class TestArrayValueObjectSpec extends ObjectBehavior
{
    function it_equals_with_another()
    {
        $data = ['test'];
        $this->beConstructedWith($data);

        $this->equals(new TestArrayValueObject($data))->shouldReturn(true);
    }

    function it_equals_with_another_anonymous()
    {
        $data = ['test'];
        $this->beConstructedWith($data);

        $this->equals(
            new class($data) extends ArrayValueObject implements TestArrayValueObjectInterface {
            }
        )->shouldReturn(true);
    }

    function it_not_equals_with_another()
    {
        $this->beConstructedWith(['test']);
        $this->equals(new TestArrayValueObject(['test2']))->shouldReturn(false);
    }

    function it_not_equals_with_another_anonymous()
    {
        $this->beConstructedWith(['test']);
        $this->equals(
            new class(['test2']) extends ArrayValueObject implements TestArrayValueObjectInterface {
            }
        )->shouldReturn(false);
    }
}
