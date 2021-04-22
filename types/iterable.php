<!--  Iterable parameter type example -->
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}

?>

<!-- Iterable parameter default value example -->
<?php

function foo(iterable $iterable = []) {
    // ...
}

?>

<!--  Iterable return type example -->
<?php

function bar(): iterable {
    return [1, 2, 3];
}

?>

<!-- Iterable generator return type example -->
<?php

function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

?>
