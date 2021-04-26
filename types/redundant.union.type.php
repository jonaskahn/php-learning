<?php
// Each name-resolved type may only occur once. Types such as int|string|INT result in an error.
// If bool is used, false cannot be used additionally.
// If object is used, class types cannot be used additionally.
// If iterable is used, array and Traversable cannot be used additionally.
?>
<?php
function foo(): int|INT {} // Disallowed
function foo(): bool|false {} // Disallowed

use A as B;
function foo(): A|B {} // Disallowed ("use" is part of name resolution)

class_alias('X', 'Y');
function foo(): X|Y {} // Allowed (redundancy is only known at runtime)
?>
