<?php

namespace BankKata;

use PHPUnit\Framework\TestCase;

class BankAccountRepositoryTest extends TestCase
{
    public function testGet()
    {
        $repository = new BankAccountRepository();
        $repository->add($accountId = 1, 'my statement');
        $this->assertEquals('my statement', $repository->get($accountId = 1));
    }

}
