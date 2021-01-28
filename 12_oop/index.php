<?php

// What is class and instance

require_once "Person.php";
require_once "Student.php";

// $p = new Person('Reyna', 'Galan');
// $p->setAge(19);
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getAge() . '<br/>';

// $p2 = new Person('Miriam', 'Sequeira');
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// echo Person::getCounter();

// Create Person class in Person.php

// Create instance of Person

$student = new Student('Reyna', 'Galan', '1234');
echo '<pre>';
var_dump($student);
echo '</pre>';

// Using setter and getter
