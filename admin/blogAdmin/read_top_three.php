<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once './database.php';
include_once './posts.php';

 // Instantiate DB & connect
 $database = new Database();
 $db = $database->connect();

 // Instantiate blog post object
 $post = new Post($db);

 // Blog post query
 $result = $post->readThree();
 // Get row count
 $num = $result->rowCount();

 // Check if any posts
 if($num > 0) {
   // Post array
   $posts_arr = array();


   while($row = $result->fetch(PDO::FETCH_ASSOC)) {
     extract($row);

     $post_item = array(
       'Sno' => $Sno,
       'Title' => $Title,
       'Author' => $Author,
       'Content' => html_entity_decode($Content),
       'Category' => $Category,
       'Event' => $Event,
       'Image' => $Image,
       'Date' => $Date,
     );

     // Push to "data"
     array_push($posts_arr, $post_item);
     // array_push($posts_arr['data'], $post_item);
   }

   // Turn to JSON & output
   echo json_encode($posts_arr);

 } else {
   // No Posts
   echo json_encode(
     array('message' => 'No Posts Found')
   );
 }


?>