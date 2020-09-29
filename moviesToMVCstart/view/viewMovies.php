<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> <?php echo $pageTitle; ?> </p>

        <br>
        <?php include("view/nav.php")?>
        <table>
            
            <?php foreach ($movies as $single) : ?>
                <tr>
                    <td><?php echo $single['title']; ?></td>
                    <td><?php echo $single['director']; ?></td>
                    <td><?php echo $single['year']; ?></td>
                    <td><a href="index.php?action=showByRating&rating=<?php echo $single['rating']; ?>"><?php echo $single['rating']; ?></a></td>
                </tr>
            <?php endforeach; ?> 

        </table>

    </body>
</html>