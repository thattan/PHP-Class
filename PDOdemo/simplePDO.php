<?php
require_once('database.php');



//normal delete call
//baddelete_ID(5);

//sql injection!
//baddelete_ID('5 OR 1=1');
$movies = get_all();


//var_dump($movies);
//
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> <?php ?> </p>

        <br>
        
        <table>

            <?php foreach ($movies as $single) : ?>
                <tr>
                    <td><?php echo $single[0]; ?></td>
                </tr>
            <?php endforeach; ?> 

        </table>

    </body>
</html>
