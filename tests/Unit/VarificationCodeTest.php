<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VarificationCodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVarificationCodeCanBeGenerated()
    {
    	$generatedCode = generateVerificationCode();
        $this->assertTrue(true);
    }
}
