<?php

use Akash\TestingPhp\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testIsCalculatorInstance()
    {
        $calculator = new Calculator();
        $calculatorInstance = $calculator->getInstance();

        $this->assertInstanceOf(Calculator::class, $calculatorInstance);
    }

    public function testaddTwoNumber()
    {
        $calculator = new Calculator();
        // $sum = $calculator->addNumber(100, 200);

        $this->assertSame(300, $calculator->addNumber(100, 200));
        $this->assertEquals('300', $calculator->addNumber(100, 200));
    }

    public function testCanAddTwoNumber()
    {
        $calculator = new Calculator();

        $this->assertTrue($calculator->canAddTwoNumber(4, 5));

        $this->assertNotTrue($calculator->canAddTwoNumber('akash', 5));
    }

    public function testCountNumbers()
    {
        $calculator = new Calculator();
        $this->assertCount(0, $calculator->numbers);

        $this->assertSame(300, $calculator->addNumber(100, 200));
        $this->assertCount(2, $calculator->numbers);
    }

    public function testCountNumbersAsArray()
    {
        $calculator = new Calculator();
        $this->assertSame(300, $calculator->addNumber(100, 200));
        $this->assertIsArray($calculator->numbers);
        $this->assertArrayHasKey(100, $calculator->numbers);
        $this->assertArrayHasKey(200, $calculator->numbers);
    }
}
