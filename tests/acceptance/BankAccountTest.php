<?php

namespace Tests;

use BankKata\BankAccount;
use BankKata\BankController;
use BankKata\Repository;
use BankKata\Transaction;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function testDisplayStatement()
    {
        //Given
        $bankAccount = new BankAccount();
        $bankAccount->addTransaction(new Transaction('10/10/2017', '500'));
        $bankAccount->addTransaction(new Transaction('10/10/2017', '-200'));
        $bankAccount->addTransaction(new Transaction('10/10/2017', '300'));

        //When
        $controller = new BankController(new Repository());
        $statement = $controller->getStatement($accountId = 1);

        //Then
        $expectedStatement = <<< EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600

EOF;
        $this->assertEquals($expectedStatement, $statement);
    }
}
