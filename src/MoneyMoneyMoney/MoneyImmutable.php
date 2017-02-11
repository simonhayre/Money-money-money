<?php

namespace VictoriaPlum\MoneyMoneyMoney;

class MoneyImmutable
{
    /** @var float */
    private $grossPricePence;
    /** @var float */
    private $grossAdditionalPricePence;
    /** @var int */
    private $tax;

    /**
     * @param float $grossPricePence
     * @param float $grossAdditionalPricePence
     * @param float $taxRate
     */
    public function __construct(float $grossPricePence = 0.00, float $grossAdditionalPricePence = 0.00, float $taxRate = 0.00)
    {
        $this->grossPricePence = $grossPricePence;
        $this->grossAdditionalPricePence = $grossAdditionalPricePence;
        $this->tax = round($this->getTaxPenceFromGross($grossPricePence + $grossAdditionalPricePence, $taxRate));
    }

    /**
     * @param float $grossPricePence
     * @param float $grossAdditionalPricePence
     * @param float $taxRate
     *
     * @return MoneyImmutable
     */
    static public function withGrossPence(float $grossPricePence, float $grossAdditionalPricePence, float $taxRate) : MoneyImmutable
    {
        return new self($grossPricePence, $grossAdditionalPricePence, $taxRate);
    }

    /**
     * @param float $grossPrice
     * @param float $grossAdditionalPrice
     * @param float $taxRate
     *
     * @return MoneyImmutable
     */
    static public function withGross(float $grossPrice, float $grossAdditionalPrice, float $taxRate) : MoneyImmutable
    {
        return self::withGrossPence($grossPrice * 100, $grossAdditionalPrice * 100, $taxRate);
    }

    /**
     * @param float $netPricePence
     * @param float $netAdditionalPricePence
     * @param float $taxRate
     *
     * @return MoneyImmutable
     */
    static public function withNetPence(float $netPricePence, float $netAdditionalPricePence, float $taxRate) : MoneyImmutable
    {
        $grossPricePence = $netPricePence  + self::getTaxPenceFromNet($netPricePence, $taxRate);
        $grossAdditionalPricePence = $netAdditionalPricePence  + self::getTaxPenceFromNet($netAdditionalPricePence, $taxRate);

        return self::withGrossPence($grossPricePence, $grossAdditionalPricePence, $taxRate);
    }

    /**
     * @param float $netPrice
     * @param float $netAdditionalPrice
     * @param float $taxRate
     *
     * @return MoneyImmutable
     */
    static public function withNet(float $netPrice, float $netAdditionalPrice, float $taxRate) : MoneyImmutable
    {
        return self::withNetPence($netPrice * 100, $netAdditionalPrice * 100, $taxRate);
    }

    /** @return int */
    public function totalWithGrossPence() : int
    {
        return round($this->grossPricePence + $this->grossAdditionalPricePence);
    }

    /** @return float */
    public function totalWithGross() : float
    {
        return round($this->totalWithGrossPence() / 100, 2);
    }

    /** @return int */
    public function totalWithNetPence() : int
    {
        return round($this->totalWithGrossPence() - $this->tax);
    }

    /** @return float */
    public function totalWithNet() : float
    {
        return round($this->totalWithNetPence() / 100, 2);
    }

    /**
     * @param int $net
     * @param float $taxRate
     *
     * @return float
     */
    static private function getTaxPenceFromNet(int $net, float $taxRate) : float
    {
        return $net * $taxRate;
    }

    /**
     * @param float $gross
     * @param float $taxRate
     *
     * @return float
     */
    private function getTaxPenceFromGross(float $gross, float $taxRate) : float
    {
        return $gross - ($gross / (1 + $taxRate));
    }
}