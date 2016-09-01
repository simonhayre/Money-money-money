<?php

namespace spec\VictoriaPlum\MoneyMoneyMoney;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('TAP135', 12.87, 3.67, 34);
    }

    function it_has_a_price_in_pence_without_tax()
    {
    }

    function it_has_a_price_in_pounds_without_tax()
    {
    }

    function it_has_a_price_in_pence_with_tax()
    {
    }

    function it_has_a_price_in_pounds_with_tax()
    {
    }

    function it_can_have_an_additional_price_added_without_tax()
    {
    }

    function it_can_calculate_the_tax_amount_using_the_given_tax_rate()
    {
    }

    function it_can_format_currency_as_euros()
    {
    }

    function it_can_format_currency_as_us_dollars()
    {
    }
}
