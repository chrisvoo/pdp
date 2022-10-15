<?php

namespace Pdp\Structural\Adapter\ObjectAdapter;

class InsuranceMarketCompare implements MarketCompare
{
    private $premium;

    public function __construct(float $limit, float $excess)
    {
        $this->premium = new Insurance($limit, $excess);
    }

    public function getAnnualPremium(): float
    {
        return $this->premium->annualPremium();
    }

    public function getMonthlyPremium(): float
    {
        return $this->premium->monthlyPremium();
    }
}