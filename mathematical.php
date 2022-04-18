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

    // function substract(...$numbers)
    // {
    //     $substraction = $numbers[0];
    //     foreach ($numbers as $n) {
    //         $substraction -= $n;
    //     }
    //     return $substraction;
    // }

    // function multiply(...$numbers)
    // {
    //     $multiplication = 0;
    //     foreach ($numbers as $n) {
    //         $multiplication *= $n;
    //     }
    //     return $multiplication;
    // }

    // function divide(...$numbers)
    // {
    //     $division = 0;
    //     foreach ($numbers as $n) {
    //         $division /= $n;
    //     }
    //     return $division;
    // }

    // echo substract(100,10,4);

    //add single digits together

    function addDigits($number)
    {
        if ($number > 9) {
            return $number % 10 + addDigits(floor($number / 10));
        } else {
            return $number;
        }
    }


    //areas & volume

    function calculateArea($height, $width)
    {
        $result = $height * $width;
        return $result;
    }
    function calculateVolume($height, $width, $deep)
    {
        $depth = $height * $width * $deep;
        return $depth;
    }
