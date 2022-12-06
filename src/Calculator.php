<?php

namespace Akash\TestingPhp;

class Calculator
{
    public $numbers;

    public function __construct()
    {
        $this->numbers = [];
    }

    public function getInstance()
    {
        return $this;
    }

    public function addNumber($number1, $number2)
    {
        // array_push($this->numbers, $number1);
        // array_push($this->numbers, $number2);
        $this->numbers[$number1] = $number1;
        $this->numbers[$number2] = $number2;

        return $number1 + $number2;
    }

    public function canAddTwoNumber($number1, $number2)
    {
        if (is_numeric($number1) && is_numeric($number2)) {
            return true;
        }

        return false;
    }
}
