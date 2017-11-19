<?php

namespace BankKata;

class BankController
{

    /**
     *
     */
    public function __construct()
    {
    }

    public function getStatement(int $bankAccountId) : string
    {
        return <<<EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;

    }
}
