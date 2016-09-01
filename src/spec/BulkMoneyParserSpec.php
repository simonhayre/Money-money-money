<?php

namespace spec\VictoriaPlum\MoneyMoneyMoney;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BulkMoneyParserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            [
                ['TAP135', 12.87, 3.67, 34],
                ['BATH123', 256.78, 30.12, 27],
                ['BASIN678', 89.99, 20.00, 50],
                ['SHOWER897', 200.00, 12.50, 2],
                ['TOILET321', 95.00, 7.80, 5]
            ]
        );
    }

    function it_can_output_prices_for_a_batch_of_products()
    {
        $this->process()->shouldReturn(
            [
                ['TAP135', 12.87, 3.67, 34],
                ['BATH123', 256.78, 30.12, 27],
                ['BASIN678', 89.99, 20.00, 50],
                ['SHOWER897', 200.00, 12.50, 2],
                ['TOILET321', 95.00, 7.80, 5]
            ]
        );
    }
}
