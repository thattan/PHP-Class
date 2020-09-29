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
        <?php include("view/nav.php")?>
        <form action="index.php" method="post"> 
            <input type="hidden" name="action" value="addMovie">
            
            <label>Title</label>
            <input type="text" name="title">
            <span><?php 
            
            if(array_key_exists('title', $errors))
            {
                echo $errors['title']; 
            }
            ?></span>
            <br>

            <label>Director</label>
            <input type="text" name="director">
            <span><?php 
            
            if(array_key_exists('director', $errors))
            {
                echo $errors['title']; 
            }
            ?></span>
           
            <br>
            <label>Year</label>
            <input type="text" name="year">
            <span><?php 
            
            if(array_key_exists('year', $errors))
            {
                echo $errors['year']; 
            }
            ?></span>
            <br>
            <br>
            <label>Rating</label>
            <input type="text" name="rating">
            <span><?php 
            
            if(array_key_exists('rating', $errors))
            {
                echo $errors['rating']; 
            }
            ?></span>
            <br>
            <br>
            <input type="submit" value="add">
        </form>
    </body>
</html>
