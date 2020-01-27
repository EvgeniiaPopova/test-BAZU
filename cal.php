<?php

class Cal
{
    /** @var int */
    public $result = 0;

    /**
     * @param int $var
     * @return float
     */
    public function add($var)
    {
        return $this->result += floatval($var);
    }

    /**
     * @param int $var
     * @return float
     */
    public function min($var)
    {
        return $this->result -= floatval($var);
    }

    /**
     * @param int $digit
     * @return float
     */
    public function razdelit($digit)
    {
        if (floatval($digit) !== 0) {
            $this->result = $this->result / floatval($digit);
        }

        return $this->result;
    }

    /**
     * @param int $var
     * @return float|int
     */
    public function mult($var)
    {
        return $this->result *= $var;
    }

    /**
     * @param int $var
     * @return float
     */
    public function round($var)
    {
        return $this->result = round($var);
    }

}