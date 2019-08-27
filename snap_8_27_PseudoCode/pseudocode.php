<!--1. In pseudocode, write a function that takes an array of numbers, and returns another array that counts the number of times each number appears in the array.-->
<p>
Set each numInArray to 0
$array = numbersInArray at index 0

For each number in the array
	For each numbersInArray is present, then add 1 to numbersInArray
		Return numbersInArray
	End for
End for
Print $array


<!--2. In pseudocode, write a function that takes two integers. For each integer in between those two numbers (inclusive), output 'fizz' if the number is even, 'buzz' if the number is divisible by 3, and 'baz' without 'fizz' or 'buzz' if the number is divisible by both.-->

$int1 = x
$int2 = y
$numb = integer
Set x > y

While x < $numb > y
	For each $numb/3 with %0 && $numb/2 with %0
		print 'baz'
	Else For each $numb/2 with %0 && !-- $numb/3 with %0
		print 'fizz'
	Else For each $numb/3 with %0 && !-- $numb/2 with %0
		print 'buzz'
	End for
End While

</p>
