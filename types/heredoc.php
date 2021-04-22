<!-- 1 Invalid example -->

<?php
class foo {
    public $bar = <<<EOT
bar
    EOT;
}
// Identifier must not be indented
?>

<!-- Valid example -->
<?php
class foo {
    public $bar = <<<EOT
bar
EOT;
}
?>

<!-- Long text example 
http://sandbox.onlinephpfunctions.com/code/b3684a7b1e49cebec35de7863429f2041aace74c
-->
<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;
?>

<!-- Using Heredoc to initialize static values -->
<?php
// Static variables
function foo()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

// Class properties/constants
class foo
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}
?>
