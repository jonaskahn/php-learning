<!-- Aliases for the above scalar types are not supported. Instead, they are treated as class or interface names. 
For example, using boolean as a type declaration will require the value to be an instanceof the class or interface boolean, 
rather than of type bool -->
<?php
    function test(boolean $param) {}
    test(true);
?>

<!-- 
Warning: "boolean" will be interpreted as a class name. Did you mean "bool"? Write "\boolean" to suppress this warning in /in/9YrUX on line 2

Fatal error: Uncaught TypeError: test(): Argument #1 ($param) must be of type boolean, bool given, called in - on line 3 and defined in -:2
Stack trace:
#0 -(3): test(true)
#1 {main}
  thrown in - on line 2
-->
