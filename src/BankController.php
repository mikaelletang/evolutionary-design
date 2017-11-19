<?php

namespace BankKata;

class BankController
{
    private $repository;

    public function __construct(BankAccountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getStatement(int $bankAccountId) : string
    {
        $statement = $this->repository->get($bankAccountId)->getStatement();
        return $statement;

    }
}
