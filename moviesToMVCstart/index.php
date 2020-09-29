<?php
require_once('./model/database.php');

$action = filter_input(INPUT_GET, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = 'showAllMovies';
    }
}

switch ($action){
    case 'showAllMovies':
        $movies = get_all();
        $pageTitle = "All Movies";
        include './view/viewMovies.php';
        die();
        break;

    case 'showByRating':
        $rating = filter_input(INPUT_GET, "rating", FILTER_VALIDATE_INT);

        try {
            $movies = get_rating($rating);
        } catch (Exception $ex) {
            //echo "DB is down try again later";
            error_log($ex->getMessage());
            echo $ex->getMessage();
            exit();
        }
        $pageTitle = "Movies Rated $rating";
        include './view/viewMovies.php';
        die();
        break;
    
    case 'deleteForm':
        $movies = get_all();
        include './view/deleteForm.php';
        die();
        break;
    
    case 'deleteMovie':
        $ID = filter_input(INPUT_POST, 'movieId', FILTER_VALIDATE_INT);
        delete_ID($ID);
        header("Location: index.php");
        break;
    
    case 'addForm':
        include './view/addForm.php';
        die();
        break;
        
    case 'addMovie':
        $title = filter_input(INPUT_POST, 'title');
        $director = filter_input(INPUT_POST, 'director');
        $year = filter_input(INPUT_POST, 'year',FILTER_VALIDATE_INT);
        $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
        
        $errors = [];
        
        if ($title === "" || $title === null){
         
            $errors['title'] = "Title must not be blank";
        }   
        if ($director == ""){
            $errors['director'] = "Director must not be blank";
        }
        
        if ($year === false || $year === null) {
            $errors['year'] = "Year must be valid";
        } else if ($year < 1901 || $year > 2155) {
            $errors['year'] = "Must be between 1901 and 2155";
        }

        if ($rating === false || $rating === null) {
            $errors['rating'] = "Rating must be valid";
        } else if ($rating < 1901 || $rating > 2155) {
            $errors['rating'] = "Must be between 1 and 10";
        }

        if(empty($errors)) {
            try {
                 add_movie($title, $director, $year, $rating);            
            } catch (Exception $ex) {
                $message = "DB error try again later";
                include 'view/addForm.php';
                die();
            }
            header("Location: index.php");
        } else {
            include 'view/addForm.php';
            die();
        }
        

        break;

    default:
        break;
}

?>


