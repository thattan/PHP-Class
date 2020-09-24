<!DOCTYPE html>

<?php
    $someText = "dynamic text";
    $varA = "from one tag";
    $varB = 1;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>HEADLINES AND <?php echo $someText;?></h1>
        <p>You can combine static html with values from php variables</p>
        <div>
            <h3>This lets you have a file that's largely easy to style html</h3>
            <ul>
                <li>with some</li>
                <li><?php echo $someText?></li>
                <li>all php tags share the same scope</li>
                <li>So you can use the same variables</li>
                <li>like this <?php echo $varB + 12?></li>
                <li>and again <?php echo ++$varB?></li>
            </ul>
        </div>
        
    </body>
</html>
