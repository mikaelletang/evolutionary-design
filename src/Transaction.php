<?php

namespace BankKata;

class Transaction
{
    public $date;
    public $amount;

    public function __construct(string $date, int $amount)
    {
        $this->date = $date;
        $this->amount = $amount;
    }

    public function __toString()
    {
        return sprintf("%s | %s", $this->date, $this->amount);
    }

}
