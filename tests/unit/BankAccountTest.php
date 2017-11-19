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
        $bankAccount->addTransaction('10/10/2017 | 500 | 500');
        $bankAccount->addTransaction('10/10/2017 | -200 | 300');
        $bankAccount->addTransaction('10/10/2017 | 300 | 600');
        $expectedStatement = <<< EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
        $this->assertEquals($expectedStatement, $bankAccount->getStatement());
    }
}
