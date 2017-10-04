<?php  
  class Movie {
    public $director;
    public $title;
    public $rating;
  }
/* Declare your variables */  
    $movies = array();  
// Create a  movie and add it to list
    $movie = new Movie();
    $movie->director = "Batman";
    $movie->title="Christoper Nolan";
    $movie->rating="18";

    $movies[]=$movie;

// Create a  movie and add it to list
    $movie = new Movie();
    $movie->director = "Spiderman";
    $movie->title="Sam Raimi";
    $movie->rating="15";

    $movies[]=$movie;

//Add a Movie 
  
/* Populate your array with a list of dummy strings */  
    for($i = 0; $i < 10; $i++) {  
        $movie = new Movie();
        $movie->director = "Director $i";
        $movie->title="Title $i";
        $movie->rating="PG $i";
        $movies[]=$movie;
    }  
  
/* Set the header type for output */  
  
    header('Content-Type: application/json');  
  
/* Create a variable to hold your JSON data */  
  
    $jsonOutput =  json_encode($movies);  
  
/* Output the JSON data */  
  
    echo $jsonOutput;
