<?php

/*
 * 
 */

for ($num = 1; $num <= 37; $num++) 
{
    if ($num % 5 == 0 && $num % 3 != 0)
    {
        echo "<p style=\"color:black;font-size: 200%\">" . $num . "</p>";
    } else if ($num % 3 == 0 && $num % 5 != 0)
    {
        echo "<p style=\"color:red;font-size: 100%\">" . $num . "</p>";
    } else if ($num % 3 == 0 && $num % 5 == 0)
    {
        echo "<p style=\"color:red;font-size: 200%\">" . $num . "</p>";
    } else 
    {
        echo "<p style=\"color:black;font-size: 100%\">" . $num . "</p>";
    }
}

?>
