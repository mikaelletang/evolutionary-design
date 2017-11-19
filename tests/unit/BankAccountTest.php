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
        $expectedStatement = <<< EOF
Date | Transaction | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
        $this->assertEquals($expectedStatement, $bankAccount->getStatement());
    }

}
