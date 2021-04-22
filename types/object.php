<!-- Initialization -->
<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>


<!-- Converting object -->
<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
?>

<!--  a member variable named scalar will contain the value -->
<?php
$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
?>

<!-- create an empty generic php object that you can then modify for whatever purpose you choose -->
<?php $genericObject = new stdClass(); ?>


<!-- More examples 
In PHP 7 there are a few ways to create an empty object
-->

<?php
$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class{}; // Instantiate anonymous class
$obj3 = (object)[]; // Cast empty array to object

var_dump($obj1); // object(stdClass)#1 (0) {}
var_dump($obj2); // object(class@anonymous)#2 (0) {}
var_dump($obj3); // object(stdClass)#3 (0) {}
?>

<!-- $obj1 and $obj3 are the same type, but $obj1 !== $obj3. Also, all three will json_encode() to a simple JS object {}: -->

<?php
echo json_encode([
    new \stdClass,
    new class{},
    (object)[],
]);
?>

<!-- RESULT
Outputs: [{},{},{}]
-->
