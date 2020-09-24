<?php

//http://php.net/manual/en/function.echo.php
//view the page source to see the difference between echoing text and what html is displayed
echo "Hello World"."<br>";

echo "This spans
multiple lines in the text,
but does it display like that in html?";

echo "<br>";
echo "No it doesn't, so we need to use html tags if we want to diplay it";
echo "<br>";
echo "<h1>LIKE THIS!</h1>";

echo "This spans\nmultiple lines. The newlines will be\noutput as well.";

echo "Escaping characters is done \"Like this\" and \$this\$.";

echo "<br>";

// You can use variables inside of an echo statement
$foo = "foobar";
$bar = "barbaz";

// If you are not using any other characters, you can just echo variables
echo "<br>";
echo $foo;          // foobar
echo "<br>";
echo $foo, $bar;     // foobarbarbaz
echo "<br>";
//string interpolation
echo "foo is $foo"; // foo is foobar
echo "<br>";
echo "foo is " . $foo;
echo "<br>";
// Using single quotes will print the variable name, not the value
echo 'foo is $foo'; // foo is $foo


echo "<br>";
// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.';
echo "<br>";
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation' . "\n";
echo "<br>";
echo 'The plus symbol ' + " + " + " is NOT a concatenation operator in PHP";


echo "<br>";

echo "<p style=\"color:red;font-size: 200%\"> Some styling with inline CSS. <br>";
echo "persists to the next line. <br>";
echo "<p style=\"color:black;font-size: 100%\"> Changing the styling back. <br>";

?>