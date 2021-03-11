<?php

namespace Tests\Unit;

use Tests\TestCase;
use Fijey\Kalkulator\Calculator;

class BinerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_route_is_exists()
    {
        $this->get("/convert")->assertStatus(200);
        // $this->assertTruSe(true);
    }
    public function test_convert_return()
    {
       $this->assertEquals(1100, Calculator::decimalToBinary(12)); 
    }
}
