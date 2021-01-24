<?php

// Create array
// $fruits = array(); // old fashion way
// $fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Get element by index
// echo $fruits[2].'<br>';

// Set element by index
// $fruits[0] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Check if array has element at index 2
// isset($fruits[3]); // false

// Append element
// $fruits[] = 'Banana';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Print the length of the array
// echo count($fruits).'<br>';

// Add element at the end of the array
// array_push($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// Remove element from the end of the array
// array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Add element at the beginning of the array
// array_unshift($fruits, 'bar');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Remove element from the beginning of the array
// echo array_shift($fruits);

// Split the string into an array
// $string = "Banana, Apple, Peach";

// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// Combine array elements into string
// echo implode("&", $fruits);

// Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('Mango', $fruits));
// echo '</pre>';

// Search element index in the array
// echo '<pre>';
// var_dump(array_search('Apple', $fruits));
// echo '</pre>';

// Merge two arrays
// $vegetables = ["Potato", "Cucumber"];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]);
// echo '</pre>';

// Sorting of array (Reverse order also)
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// rsort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Marvin',
    'surname' => 'Marcia',
    'age' => 28,
    'hobbies' => ['Tennis', 'Video Games']
];
echo '<pre>';
// print_r($person);
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if (!isset($person['address'])) {
//     $person['address'] = 'unknown';
// }
$person['address'] = $person['address'] ?? 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
];
echo '<pre>';
var_dump($todos);
echo '</pre>';
