<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php">View All Movies</a>
        <a href="index.php?action=deleteForm">Delete A Movie</a>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="deleteMovie">
            <select name="movieId">
            <?php foreach ($movies as $single) : ?>
                <option value="<?php echo $single['ID']; ?>">
                    <?php echo $single['title']; ?>
                    <?php echo $single['director']; ?>
                    <?php echo $single['year']; ?>                  
                </option>
            <?php endforeach; ?> 
            </select>
            <input type="submit" value="Delete">
        </form>
        
    </body>
</html>
