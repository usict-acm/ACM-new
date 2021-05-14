<?php

require('./database.php');
require('./posts_home.php');

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if(isset($_GET)){

$database = new Database();
$db = $database->connect();

$post = new Post_Home($db);

$result = $post->read();
$num = $result->rowCount();

if($num > 0) {
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
   array_push($posts_arr, $post_item);
}
// $final = $posts_arr;
$final = json_encode($posts_arr);
echo $final;
// echo $final[0]["Title"];
// echo $final;
// echo json_encode($posts_arr);

} else {
echo json_encode(
  array('message' => 'No Posts Found')
);
}
}

?>