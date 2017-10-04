<?php

class Movie {

public $director;
public $title;
public $rating;

}



/* Declare your varibles */
    $movies = array();
  
  /* Populate your array with a list of dummy strings */
      for($i = 0; $i < 10; $i++){
        $movie = new Movie();
        $movie->director = "Director $i";
        $movie->title="Title $i";
        $movie->rating="PG $i";
        $movie[]=$movie;
    }
    
    /* Set the header type for output */
     
     header('Content-Type: application/json');
      
  /* Create a variable to hold your JSON data */ 
  
      $jsonOutput = json_encode($items);
    
    /* Output the JSON data */
    
      echo $jsonOutput;
