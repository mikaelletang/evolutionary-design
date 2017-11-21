<?php

namespace BankKata;

use PHPUnit\Framework\TestCase;

class BankControllerTest extends TestCase
{
    /** @var string */
    private $statement;

    /** @var BankAccountRepository */
    private $bankAccountRepository;

    protected function setUp()
    {
        $this->bankAccountRepository = new BankAccountRepository();
        $this->statement = <<< EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
        $this->bankAccountRepository->add($accountId = 1, $this->statement);
    }

    function testGetStatement() {
        $controller = new BankController($this->bankAccountRepository);
        $returnedStatement = $controller->getStatement($accountId = 1);
        $this->assertEquals($this->statement, $returnedStatement);
    }

}
