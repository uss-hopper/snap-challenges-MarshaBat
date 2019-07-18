/**
 *QUESTION #1
 * Convert a weight or mass to grams.
 *
 * @param mass The weight of mass to be converted.
 * @param units The abbreviattion for the units specified in the mass.
 * @return The converted mass in grams.
 **/

function convertToGrams (mass, units) {
	$convertedValue = 0;

	if(units === 'g') {
		return mass;
		} else if (units === "lbs") {
		return mass * 453.592;
		} else if (units === "oz") {
		return mass * 28.35;
		} else if (units === 'kg') {
		return mass * 1000;
		} else if ( units === 'mg') {
		return mass / 1000;
	}

	return $convertedValue
}

console.log(convertToGrams(10, "lbs"));

/**
 *QUESTION #2
 * Adds the unique positive factors of a number.
 *
 * @param number The The number to be factored.
 * @return The sum of the factors.
 **/

function sumUniquePositiveFactors(number) {
	if (number < 0 || number > 10000) {
		return "No!";
	}
	let sum = 0; // "let" identifies this as a new variable

	for(i = 1; i <= number; i++)
		if(number % i === 0) {
			sum = sum + i;
		}

	return sum
}

console.log(sumUniquePositiveFactors(39000));




