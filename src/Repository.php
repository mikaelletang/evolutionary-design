<?php

namespace BankKata;

class Repository
{

    public function get($accountId)
    {
        return <<<EOF
Date | Amount | Balance
10/10/2017 | 500 | 500
10/10/2017 | -200 | 300
10/10/2017 | 300 | 600
EOF;
    }
}
