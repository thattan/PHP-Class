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

function delete_ID($id) {
    global $db;

    // try to never concatenate values into a query!
    // use named placeholders instead!!
    $query = 'DELETE from movies WHERE id= :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
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

function add_movie($title, $director, $year, $rating)
{
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO movies
                 (title, director, year, rating)
              VALUES
                 (:title, :director, :year, :rating)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':director', $director);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':rating', $rating);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>