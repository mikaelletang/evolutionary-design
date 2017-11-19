<?php

namespace BankKata;

class BankAccount
{

    private $transactions = [];

    public function getStatement()
    {
        $statement = "Date | Amount | Balance\n";
        $statement .= implode("\n", $this->transactions);
        return $statement;
    }

    public function addTransaction($transaction)
    {
        $this->transactions[] = $transaction;
    }
}
