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
