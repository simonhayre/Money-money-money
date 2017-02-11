<?php

namespace VictoriaPlum\MoneyMoneyMoney;

class BulkMoneyParser
{
    /** @var array */
    private $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function process() : array
    {
        $productPrices = [];

        foreach ($this->products as $index => $product)
        {
            $money = MoneyImmutable::withNet(
                $product['price_without_tax'],
                $product['price_addition_without_tax'],
                $product['tax_rate_adjustment']
            );

            $productPrices[] = [
                'item_code' => $product['item_code'],
                'pence_with_tax' => $money->totalWithGrossPence(),
                'pence_without_tax' => $money->totalWithNetPence(),
                'pounds_with_tax' => $money->totalWithGross(),
                'pounds_without_tax' => $money->totalWithNet(),
            ];
        }

        return $productPrices;
    }
}
