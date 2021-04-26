<!-- Nullable argument type declaration -->
<?php
class C {}

function f(?C $c) {
    var_dump($c);
}

f(new C);
f(null);
?>

<!--
object(C)#1 (0) {
}
NULL
-->

    
<!-- Nullable return type declaration -->
<?php
function get_item(): ?string {
    if (isset($_GET['item'])) {
        return $_GET['item'];
    } else {
        return null;
    }
}
?>
