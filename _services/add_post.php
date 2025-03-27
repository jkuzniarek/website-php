<?php 
if($_SERVER['SERVER_NAME'] != "localhost"){
  // new posts should be blocked on prod
  die("For Display Only");
}

if(empty($_POST['date_ID']) or empty($_POST['title']) or empty($_POST['desc'])){
  die("Error: Date ID, Title, and Description are required");
}

function dateCompare($l, $r){
  // technically this orders from Z -> A
  return strcmp($r['date'], $l['date']);
}

$post_index = file_get_contents(dirname(__DIR__)."\\posts\\index.json");
$post_index = json_decode($post_index, true);

$post_index[]= [
  "date" => trim($_POST['date_ID']),
  "title" => trim($_POST['title']),
  "desc" => trim($_POST['desc']),
];

// reorders $post_index from newest to oldest
usort($post_index, 'dateCompare');

$success = file_put_contents( 
  dirname(__DIR__)."\\posts\\index.json", 
  json_encode($post_index, JSON_PRETTY_PRINT));

if($success === false){
  die("Error: could not save post index as json");
}



if(file_exists(dirname(__DIR__)."\\posts\\".trim($_POST['date_ID']).".html")){
  die("Post already exists");
}

$success = file_put_contents(
  dirname(__DIR__)."\\posts\\".trim($_POST['date_ID']).".html", 
  '<div class="border-bottom border-dark">
    <h1><em>'.$_POST['title'].'</em></h1>
    </div>
  <br>
  
  '.$_POST['body']);

if($success === false){
  die("Error: could not save post as html");
}


/* 
example sqlite DB INSERT code
require '_resources/databases/exampleDB.php';

if(!empty($_POST['update']) and $_POST['update'] == 'new'){
  // insert post
  $stmt = $db->prepare('INSERT INTO posts (date_ID, title, [description], body) VALUES ( :date_ID, :title, :desc, :body ) ');
  $stmt->bindValue(':date_ID', $_POST['date_ID']);
  $stmt->bindValue(':title', $_POST['title']);
  $stmt->bindValue(':desc', $_POST['desc']);
  $stmt->bindValue(':body', $_POST['body']);

  $stmt = $stmt->execute();
  header("location: post.php?id=".$_POST['date_ID']);
}
*/
?>Your new post has been added to the archive