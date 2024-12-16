# PHP Array Key Type Juggling

This repository demonstrates a common, yet subtle, error in PHP related to array key type juggling.  The issue arises when using both string and numeric keys that can be implicitly converted to the same type. PHP's loose typing can lead to unexpected results in terms of array size and iteration order.

## Bug Description

PHP treats the keys "1" and 1 as distinct, resulting in an array larger than expected if you're only counting the intended keys. Iteration order might also be unpredictable, especially when sorting is involved. This issue becomes particularly problematic when working with data from external sources or when the key type is unclear.

## How to Reproduce

1. Clone this repository.
2. Run the `bug.php` script.
3. Observe the output, noticing the unexpected array size and potential unexpected order of elements.