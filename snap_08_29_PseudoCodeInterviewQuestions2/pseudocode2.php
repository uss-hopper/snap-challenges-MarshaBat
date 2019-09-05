<?php>

//--In pseudocode, write a function that takes a string and returns it with all vowels (not including y) removed.

	function removeVowels (string myString) {
		vowels = ['a', 'e','i','o','u'];
		string noVowels = '';
		foreach (character in myString) {
			if(!(character in vowels)){
				noVowels = noVowels + character;
				}
			}
	return noVowels;


//In pseudocode, write a function that takes an array of numbers and returns the greatest number in the array.

function greatestNumber (array myNumbers) {
	previousNumber = null;
	for (i=0; i<myNumbersLength, i++) {
		currentValue = myNumbers [i];
		if (previousNumber = null) {
			previousNumber = currentValue;
			} elseif {currentValue > previousNumber) {
			previousNumber = currentValue;
			}
			return previousNumber;
		}
	}
}

//In pseudocode, write a function that computes the first 100 numbers in the Fibonacci sequence. The Fibonacci sequence is created by adding the two previous numbers in the sequence together, and starts 1, 1, 2, 3, 5, 8...-->

function f100 () {
	array finbonacci = [1,1];
	for (i = 2; i <=100; i++);
	fibonaaci [i] = fibonacci [i-1] + fibonacci [i-2];
	}
	return fibonacci
