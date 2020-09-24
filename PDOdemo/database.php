<?php

$dsn = 'mysql:host=localhost;dbname=movie_reviews';
$DBusername = 'root';
$DBpassword = '';

try {
    $db = new PDO($dsn, $DBusername, $DBpassword);
    //without the below line you won't see SQL exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

function get_all() {
    global $db;

    $queryMovies = 'SELECT * FROM movies';
    $statement = $db->prepare($queryMovies);
    $statement->execute();
    $movies = $statement->fetchAll();
    $statement->closeCursor();

    return $movies;
}

//this function is vulnerable to SQL injection
function baddelete_ID($id) {
    global $db;

    // try to never concatenate values into a query!
    // use named placeholders instead!!
    $query = 'DELETE from movies WHERE id=' . $id;
    $statement = $db->prepare($query);
    //the execute method returns a boolean TRUE on success or FALSE on failure.
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}



function get_rating($rating) {
    global $db;
    $query = 'SELECT * from movies WHERE rating=:rating';

    //prepare the query, bind the values, then you execute
    $statement = $db->prepare($query);
    $statement->bindValue(':rating', $rating);

    //the execute method returns a boolean TRUE on success or FALSE on failure.
    $success = $statement->execute();
    //after the statement is executed you can then fetch the results
    $results = $statement->fetchAll();

    $statement->closeCursor();
    
    return $results;
}


?>