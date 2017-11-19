<?php
/**
 */

namespace BankKata;

use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function testGetStatement()
    {
        $bankAccount = new BankAccount();
        $bankAccount->addTransaction(new Transaction('10/10/2017', '500'));
        $bankAccount->addTransaction(new Transaction('10/10/2017', '-200'));
        $bankAccount->addTransaction(new Transaction('10/10/2017', '300'));
        $expectedStatement = <<< EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600

EOF;
        $this->assertEquals($expectedStatement, $bankAccount->getStatement());
    }
}
