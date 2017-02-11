<?php

namespace spec\VictoriaPlum\MoneyMoneyMoney;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneyImmutableSpec extends ObjectBehavior
{
    function it_can_output_prices_from_net()
    {
        $money = $this::withNet(12.87, 3.67, 0.34);
        $money->totalWithGrossPence()->shouldReturn(2216);
        $money->totalWithNetPence()->shouldReturn(1654);
        $money->totalWithGross()->shouldReturn(22.16);
        $money->totalWithNet()->shouldReturn(16.54);

        $money = $this::withNet(256.78, 30.12, 0.27);
        $money->totalWithGrossPence()->shouldReturn(36436);
        $money->totalWithNetPence()->shouldReturn(28690);
        $money->totalWithGross()->shouldReturn(364.36);
        $money->totalWithNet()->shouldReturn(286.9);

        $money = $this::withNet(89.99, 20.00, 0.50);
        $money->totalWithGrossPence()->shouldReturn(16499);
        $money->totalWithNetPence()->shouldReturn(10999);
        $money->totalWithGross()->shouldReturn(164.99);
        $money->totalWithNet()->shouldReturn(109.99);

        $money = $this::withNet(200.00, 12.50, 0.02);
        $money->totalWithGrossPence()->shouldReturn(21675);
        $money->totalWithNetPence()->shouldReturn(21250);
        $money->totalWithGross()->shouldReturn(216.75);
        $money->totalWithNet()->shouldReturn(212.5);

        $money = $this::withNet(95.00, 7.80, 0.05);
        $money->totalWithGrossPence()->shouldReturn(10794);
        $money->totalWithNetPence()->shouldReturn(10280);
        $money->totalWithGross()->shouldReturn(107.94);
        $money->totalWithNet()->shouldReturn(102.8);
    }

    function it_can_output_prices_from_net_pence()
    {
        $money = $this::withNetPence(1287, 367, 0.34);
        $money->totalWithGrossPence()->shouldReturn(2216);
        $money->totalWithNetPence()->shouldReturn(1654);
        $money->totalWithGross()->shouldReturn(22.16);
        $money->totalWithNet()->shouldReturn(16.54);

        $money = $this::withNetPence(25678, 3012, 0.27);
        $money->totalWithGrossPence()->shouldReturn(36436);
        $money->totalWithNetPence()->shouldReturn(28690);
        $money->totalWithGross()->shouldReturn(364.36);
        $money->totalWithNet()->shouldReturn(286.9);

        $money = $this::withNetPence(8999, 2000, 0.50);
        $money->totalWithGrossPence()->shouldReturn(16499);
        $money->totalWithNetPence()->shouldReturn(10999);
        $money->totalWithGross()->shouldReturn(164.99);
        $money->totalWithNet()->shouldReturn(109.99);

        $money = $this::withNetPence(20000, 1250, 0.02);
        $money->totalWithGrossPence()->shouldReturn(21675);
        $money->totalWithNetPence()->shouldReturn(21250);
        $money->totalWithGross()->shouldReturn(216.75);
        $money->totalWithNet()->shouldReturn(212.5);

        $money = $this::withNetPence(9500, 780, 0.05);
        $money->totalWithGrossPence()->shouldReturn(10794);
        $money->totalWithNetPence()->shouldReturn(10280);
        $money->totalWithGross()->shouldReturn(107.94);
        $money->totalWithNet()->shouldReturn(102.8);
    }

    function it_can_output_prices_from_gross()
    {
        $money = $this::withGross(17.2458, 4.9178, 0.34);
        $money->totalWithGrossPence()->shouldReturn(2216);
        $money->totalWithNetPence()->shouldReturn(1654);
        $money->totalWithGross()->shouldReturn(22.16);
        $money->totalWithNet()->shouldReturn(16.54);

        $money = $this::withGross(326.1106, 38.2524, 0.27);
        $money->totalWithGrossPence()->shouldReturn(36436);
        $money->totalWithNetPence()->shouldReturn(28690);
        $money->totalWithGross()->shouldReturn(364.36);
        $money->totalWithNet()->shouldReturn(286.9);

        $money = $this::withGross(134.985, 30.00, 0.50);
        $money->totalWithGrossPence()->shouldReturn(16499);
        $money->totalWithNetPence()->shouldReturn(10999);
        $money->totalWithGross()->shouldReturn(164.99);
        $money->totalWithNet()->shouldReturn(109.99);

        $money = $this::withGross(204.00, 12.75, 0.02);
        $money->totalWithGrossPence()->shouldReturn(21675);
        $money->totalWithNetPence()->shouldReturn(21250);
        $money->totalWithGross()->shouldReturn(216.75);
        $money->totalWithNet()->shouldReturn(212.5);

        $money = $this::withGross(99.75, 8.19, 0.05);
        $money->totalWithGrossPence()->shouldReturn(10794);
        $money->totalWithNetPence()->shouldReturn(10280);
        $money->totalWithGross()->shouldReturn(107.94);
        $money->totalWithNet()->shouldReturn(102.8);
    }

    function it_can_output_prices_from_gross_pence()
    {
        $money = $this::withGrossPence(1724.58, 491.78, 0.34);
        $money->totalWithGrossPence()->shouldReturn(2216);
        $money->totalWithNetPence()->shouldReturn(1654);
        $money->totalWithGross()->shouldReturn(22.16);
        $money->totalWithNet()->shouldReturn(16.54);

        $money = $this::withGrossPence(32611.06, 3825.24, 0.27);
        $money->totalWithGrossPence()->shouldReturn(36436);
        $money->totalWithNetPence()->shouldReturn(28690);
        $money->totalWithGross()->shouldReturn(364.36);
        $money->totalWithNet()->shouldReturn(286.9);

        $money = $this::withGrossPence(13498.5, 3000, 0.50);
        $money->totalWithGrossPence()->shouldReturn(16499);
        $money->totalWithNetPence()->shouldReturn(10999);
        $money->totalWithGross()->shouldReturn(164.99);
        $money->totalWithNet()->shouldReturn(109.99);

        $money = $this::withGrossPence(20400, 1275, 0.02);
        $money->totalWithGrossPence()->shouldReturn(21675);
        $money->totalWithNetPence()->shouldReturn(21250);
        $money->totalWithGross()->shouldReturn(216.75);
        $money->totalWithNet()->shouldReturn(212.5);

        $money = $this::withGrossPence(9975, 819, 0.05);
        $money->totalWithGrossPence()->shouldReturn(10794);
        $money->totalWithNetPence()->shouldReturn(10280);
        $money->totalWithGross()->shouldReturn(107.94);
        $money->totalWithNet()->shouldReturn(102.8);
    }
}
