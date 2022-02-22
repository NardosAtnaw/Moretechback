<?php

require __DIR__ . '/config.php';

$received = json_decode(file_get_contents("php://input"));
$data = array();
$searchResult = array();

if ($received->action == 'fetchAll') {
  $query = "SELECT * FROM posts";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}

if($received->action == "search"){
  $search = $received->term;
  $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
  $result = mysqli_query($connection, $query);

  confirm($result);

 
  while ($row = mysqli_fetch_assoc($result)) {
    $searchResult[] = $row;
  }

  echo json_encode($searchResult);
}