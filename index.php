<?php

require __DIR__ . '/config.php';

$received = json_decode(file_get_contents("php://input"));
$data = array();
$searchResult = array();

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,OPTIONS,DELETE,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if ($received->action == 'fetchAll') {
  $query = "SELECT * FROM posts";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}

if ($received->action == 'fetchEdu') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = 'Educational'";
  // $query = "SELECT *
  //           FROM posts p
  //           LEFT JOIN imageposts i
  //           ON p.post_subcategory = i.post_subcategory
  //         ";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchImgEdu') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = 'Educational'";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchAna') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = 'Analytical'";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchImgAna') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = 'Analytical'";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchLab') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = 'Laboratory '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}

if ($received->action == 'fetchImgLab') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = 'Laboratory '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchAgr') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = ' Modern Agricultural Equipment and Machineries '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchImgAgr') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = ' Modern Agricultural Equipment and Machineries '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}



if ($received->action == 'fetchEqu') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = 'Equipment for Teaching Engineering and Vocational Training Institute '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchImgEqu') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = 'Equipment for Teaching Engineering and Vocational Training Institute '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}

if ($received->action == 'fetchAlu') {
  $query = "SELECT * FROM posts WHERE post_titlecategory = 'Aluminum Door and Widow Works   '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == 'fetchImgAlu') {
  $query = "SELECT * FROM imageposts WHERE post_titlecategory = 'Aluminum Door and Widow Works   '";
  $result = mysqli_query($connection, $query);
  confirm($result);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);
}
if ($received->action == "search") {
  $search = $received->term;
  $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
  $result = mysqli_query($connection, $query);

  confirm($result);


  while ($row = mysqli_fetch_assoc($result)) {
    $searchResult[] = $row;
  }

  echo json_encode($searchResult);
}
