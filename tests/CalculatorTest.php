<?php

use Akash\TestingPhp\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calculator;

    /**
     * This method is called after the last test of this test class is run.
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
        $this->calculator->numbers = [];

        // TRUCATE THE TABLE.
    }

    public function testIsCalculatorInstance()
    {
        $calculatorInstance = $this->calculator->getInstance();

        $this->assertInstanceOf(Calculator::class, $calculatorInstance);
    }

    public function testaddTwoNumber()
    {
        $this->assertSame(300, $this->calculator->addNumber(100, 200));
        $this->assertEquals('300', $this->calculator->addNumber(100, 200));
    }

    public function testCanAddTwoNumber()
    {
        $this->assertTrue($this->calculator->canAddTwoNumber(4, 5));

        $this->assertNotTrue($this->calculator->canAddTwoNumber('akash', 5));
    }

    public function testCountNumbers()
    {
        $this->assertCount(0, $this->calculator->numbers);

        $this->assertSame(300, $this->calculator->addNumber(100, 200));
        $this->assertCount(2, $this->calculator->numbers);
    }

    public function testCountNumbersAsArray()
    {
        $this->assertSame(300, $this->calculator->addNumber(100, 200));
        $this->assertIsArray($this->calculator->numbers);
        $this->assertArrayHasKey(100, $this->calculator->numbers);
        $this->assertArrayHasKey(200, $this->calculator->numbers);
    }
}
