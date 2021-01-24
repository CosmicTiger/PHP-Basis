<?php

// Function which prints "Hello I am Zura"
// function hello() {
//     echo "Hello I am Luisangel";
// }

// hello();
// hello();
// hello();

// Function with argument
function hello($name) {
    return "Hello I am $name";
}

echo hello('Luisangel').'<br>';
echo hello('Reyna').'<br>';

// Create sum of two functions
// function sum($a, $b) {
//     return $a + $b;
// }

// echo sum(4, 5);

// Create function to sum all numbers using ...$nums
// function sum(...$nums) {
//     $sumatoryNumbers = $nums;
//     $sumatory = 0;

//     foreach($sumatoryNumbers as $sumatoryNumber ) {
//         $sumatory += $sumatoryNumber;
//     }

//     return $sumatory;
// }

// echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions
function sum(...$nums) {
    $sumatoryNumbers = $nums;
    $sumatory = 0;

    return array_reduce($sumatoryNumbers, fn($sum, $sumatoryNumber) => $sum + $sumatoryNumber);
}

echo sum(1, 2, 3, 4, 5, 6);
