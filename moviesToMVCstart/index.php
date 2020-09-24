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
    default:
        break;
}

?>


