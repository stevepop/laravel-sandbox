<?php

namespace spec\Acme\Parsers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Parsers\Field');
    }

    function it_parses_fields_into_an_array()
    {

        $this->parse('title:string, body:text')->shouldReturn([
           'title' => 'string',
           'body' => 'text'
        ]);
    }

    function it_should_throw_exception_if_field_type_unrecognized()
    {
        $this->shouldThrow('Acme\Parsers\Exceptions\UnrecognizedType')
            ->duringParse('title:foobar');
    }
}
