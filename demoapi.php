<?php

/* Declare your varibles */
    $items = array();
  
  /* Populate your array with a list of dummy strings */
      for($i = 0; $i < 10; $i++){
        $items[$i] = "This is message $i";
    }
    
    /* Set the header type for output */
     
     header('Content-Type: application/json');
      
  /* Create a variable to hold your JSON data */ 
  
      $jsonOutput = json_encode($items);
    
    /* Output the JSON data */
    
      echo $jsonOutput;
