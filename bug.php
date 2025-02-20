function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

//This function does not handle errors well.  If the input is not an array or contains non-numeric values, it will throw an error or produce an unexpected result.

function calculateSumImproved(numbers) {
    if (!Array.isArray(numbers)) {
        throw new Error("Invalid input: numbers must be an array.");
    }

    let sum = 0;
    for (let i = 0; i < numbers.length; i++) {
        if (typeof numbers[i] !== 'number') {
            throw new Error(`Invalid input: Element at index ${i} is not a number.
`);
        }
        sum += numbers[i];
    }
    return sum;
}

let numbers2 = [1, 2, 3, 4, 5];
let sum2 = calculateSumImproved(numbers2);
console.log("Sum:", sum2); // Output: Sum: 15

//This function uses try...catch block to handle potential errors, providing more robust error handling.

let numbers3 = [1, 2, 'a', 4, 5];
let sum3;

try {
  sum3 = calculateSumImproved(numbers3);
} catch (error) {
  console.error(error.message); // Output: Invalid input: Element at index 2 is not a number.
}
console.log(sum3); //Output: undefined