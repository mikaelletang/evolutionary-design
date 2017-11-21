<?php

namespace BankKata;

class BankAccountRepository
{

    private $bankAccounts = [];

    public function add($accountId, $bankAccount) {
        $this->bankAccounts[$accountId] = $bankAccount;
    }

    public function get($accountId)
    {
        return $this->bankAccounts[$accountId];
    }
}
