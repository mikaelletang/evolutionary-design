<?php

namespace BankKata;

use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testGet()
    {
        $repository = new Repository();
        $expectedResult = <<<EOF
Date | Transaction | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;

        $this->assertEquals($expectedResult, $repository->get($accountId = 1));
    }

}
