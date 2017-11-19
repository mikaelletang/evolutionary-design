<?php

namespace BankKata;

class BankAccount
{

    private $transactions = [];

    public function getStatement()
    {
        $statement = "Date | Amount | Balance\n";
        $balance = 0;
        foreach ($this->transactions as $transaction) {
            $balance += $transaction->amount;
            $statement .= sprintf("%s | %d | %s\n", $transaction->date, $transaction->amount, $balance);
        }
        return $statement;
    }

    public function addTransaction($transaction)
    {
        $this->transactions[] = $transaction;
    }
}
