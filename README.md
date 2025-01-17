# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates an uncommon bug related to unexpected array modification within a recursive PHP function.  The function intends to process a multi-dimensional array, replacing instances of the string "error" with "problem". However, due to PHP's pass-by-reference nature with arrays, the original array is modified unexpectedly, leading to potential issues.

The `bug.php` file contains the flawed implementation of the recursive function. The `bugSolution.php` file provides a corrected version that avoids unintended side effects using `$data = array_map(...)` for recursive processing.
