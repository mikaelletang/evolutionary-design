<?php

namespace BankKata;

use PHPUnit\Framework\TestCase;

class BankControllerTest extends TestCase
{
    function testGetStatement() {
        $controller = new BankController(new Repository());
        $statement = $controller->getStatement($bankAccountId = 1);
        $expectedStatement = $expectedStatement = <<< EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
        $this->assertEquals($expectedStatement, $statement);
    }

}
