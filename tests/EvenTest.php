<?php
require 'Helper.php';

use Even\Helper;

// Test cases
echo Helper::isEven(4); // Output: The value 4 is even.
echo Helper::isEven(5); // Output: The value 5 is not even.
echo Helper::isEven("10"); // Output: The value 10 is even.
echo Helper::isEven("abc"); // Output: The provided value is not a valid integer.
echo Helper::isEven(); // Output: Please provide a value to check.
