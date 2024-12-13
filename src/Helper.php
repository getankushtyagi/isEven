<?php

namespace Even;

class Helper
{
    /**
     * Check if a given value is an even integer.
     *
     * @param mixed $value The value to check.
     * @return string The result of the even check or an error message.
     */
    public static function isEven($value = null): string
    {
        // Ensure a value is provided
        if ($value === null) {
            return "Please provide a value to check.";
        }

        // Validate if the value is an integer
        if (!is_int($value) && filter_var($value, FILTER_VALIDATE_INT) === false) {
            return "The provided value is not a valid integer.";
        }

        // Check if the value is even
        return $value % 2 === 0 ? "The value $value is even." : "The value $value is not even.";
    }
}
