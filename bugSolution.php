<?php
function calculateSum(array $numbers): float|int
{
    $sum = 0;
    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            throw new InvalidArgumentException('Invalid input: Array elements must be numeric.');
        }
        $sum += $number;
    }
    return $sum;
}

function calculateSumImproved(array $numbers): float|int
{
  try {
    return calculateSum($numbers);
  } catch (InvalidArgumentException $e) {
    error_log($e->getMessage());  // Log the error
    return 0; // Or handle the error as appropriate
  }
}

$numbers = [1, 2, 3, 4, 5];
$sum = calculateSumImproved($numbers);
echo "Sum:" . $sum . "\n"; // Output: Sum:15

// Example with error handling:
$numbersWithError = [1, 2, 'a', 4, 5];
$sumWithError = calculateSumImproved($numbersWithError);
echo "Sum:" . $sumWithError . "\n"; // Output: Sum:0
?>