 <?php
    //addition

    //basic functions : add, substract, multiply, divide
    function sum(...$numbers)
    {
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }

    //minus
    function substract($base, ...$numbers)
    {
        $substraction = $base;
        foreach ($numbers as $n) {
            $substraction -= $n;
        }
        return $substraction;
    }

    //echo(substract(200,50,22)); //128

    //multiply

    function multiply($base, ...$numbers)
    {
        $multiplication = $base;
        foreach ($numbers as $n) {
            $multiplication *= $n;
        }
        return $multiplication;
    }

    //echo(multiply(2,5,-250)); //-2500

    //divide

    function divide($base,...$numbers)
    {
        $division = $base;
        foreach ($numbers as $n) {
            $division /= $n;
        }
        return $division;
    }

    //echo divide(100,8.8568,4);

    //add single digits together

    function addDigits($number)
    {
        if ($number > 9) {
            return $number % 10 + addDigits(floor($number / 10));
        } else {
            return $number;
        }
    }


    //areas & volumes

    //area (of a square)
    function calculateArea($height, $width)
    {
        $result = $height * $width;
        return $result;
    }
    //volume(of a cube)
    function calculateVolume($height, $width, $deep)
    {
        $depth = $height * $width * $deep;
        return $depth;
    }
