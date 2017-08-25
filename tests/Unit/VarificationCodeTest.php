<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VarificationCodeTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVarificationCodeCanBeGenerated()
    {
        $this->assertTrue(!! generateVerificationCode());
    }
}
