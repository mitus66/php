<?php

// Declarative Functions:

// 1. Greet: This function takes a name as input and returns a greeting message.
function greet(string $name): string {
    return "Hello, $name!";
}

// 2. Calculate Area: This function takes length and width as inputs and returns the calculated area of a rectangle.
function calculateArea(float $length, float $width): float {
    return $length * $width;
}

// 3. Is Even: This function takes a number as input and returns true if it's even, otherwise false.
function isEven(int $number): bool {
    return $number % 2 === 0;
}

// Alternative using the modulo operator directly
function isEvenShort(int $number): bool {
    return $number % 2 == 0; // Double equals for loose comparison
}

// 4. Format Price: This function takes a price as input and returns it formatted with a currency symbol (e.g., "$10.00").
function formatPrice(float $price): string {
    return "$" . number_format($price, 2); // Formats to two decimal places
}

// 5. Roll Dice: This function simulates rolling a die and returns a random integer between 1 and 6.
function rollDice(): int {
    return rand(1, 6);
}

// Anonymous Functions for Array Processing:
// 1. Double Values: This anonymous function doubles each value in an array.
$numbers = [1, 2, 3, 4];
$doubledNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);

// 2. Filter Even Numbers: This anonymous function filters out odd numbers from an array.
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function($number) {
    return $number % 2 === 0;
});

// 3. Calculate Sum: This anonymous function calculates the sum of all values in an array.
$numbers = [1, 2, 3, 4];
$sum = array_reduce($numbers, function($carry, $number) {
    return $carry + $number;
}, 0); // Initial value for the accumulator

// Arrow Function for Concatenation:
$firstName = "John";
$lastName = "Doe";

$fullName = fn($firstName, $lastName) => "$firstName $lastName"; // Arrow function syntax

echo $fullName($firstName, $lastName); // Output: John Doe
