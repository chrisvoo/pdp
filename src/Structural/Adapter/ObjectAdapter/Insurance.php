<?php

namespace Pdp\Structural\Adapter\ObjectAdapter;

use Exception;

class Insurance
{
    private $limit;
    private $excess;

    public function __construct(float $limit, float $excess)
    {
        if ($excess >= $limit) {
            throw New Exception('Excess must be less than premium.');
        }

        $this->limit = $limit;
        $this->excess = $excess;
    }

    public function monthlyPremium(): float
    {
        return ($this->limit - $this->excess) / 200;
    }

    public function annualPremium(): float
    {
        return $this->monthlyPremium() * 11.5;
    }
}