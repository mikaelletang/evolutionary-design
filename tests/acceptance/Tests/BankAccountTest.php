<?php

namespace Tests;

use BankAccount;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function testDisplayStatement()
    {
        //Given
        $bankAccount = new BankAccount(
            $accountId = 1,
            $lines =
            [
                '10/10/2017 | 500 | 500',
                '10/10/2017 | -200 | 300',
                '10/10/2017 | 300 | 600',
            ]
        );

        //When
        $controller = new BankController();
        $statement = $controller->getStatement($accountId);

        //Then
        $expectedStatement = <<< EOF
Date | Transaction | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
        $this->assertEquals($expectedStatement, $statement);
    }
}
