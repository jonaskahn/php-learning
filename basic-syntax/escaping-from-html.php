<h1>Example 1</h1>

<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>

/*-------------------------------------------------------------------*/

<h1>Examples of entering and exiting the PHP parser </h1>

<?php
    echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag';


?>
/*-------------------------------------------------------------------*/

<h1>3. Advanced escaping using conditions</h1>

<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
