<?php 
include 'config.php';

$title = "Edit";
if(empty($_REQUEST['id']) and empty($_POST['update'])){
  $post = [
    'date_ID' => '',
    'title' => '',
    'description' => '',
    'body' => ''
  ];
  $title = "Add";
}
else if(!empty($_POST['update']) and $_POST['update'] != 'new'){
  // update post
  $stmt = $db->prepare('UPDATE posts SET date_ID = :date_ID, title = :title, [description] = :desc, body = :body WHERE date_ID = :id');
  $stmt->bindValue(':date_ID', $_POST['date_ID']);
  $stmt->bindValue(':title', $_POST['title']);
  $stmt->bindValue(':desc', $_POST['desc']);
  $stmt->bindValue(':body', $_POST['body']);
  $stmt->bindValue(':id', $_POST['update']);

  $stmt = $stmt->execute();
  // header("location: post.php?id=".$_POST['date_ID']);
  die($db->lastErrorMsg());
  // Unable to execute statement: attempt to write a readonly database 
}
else if(!empty($_POST['update']) and $_POST['update'] == 'new'){
  // insert post
  $stmt = $db->prepare('INSERT INTO posts (date_ID, title, [description], body) VALUES ( :date_ID, :title, :desc, :body ) ');
  $stmt->bindValue(':date_ID', $_POST['date_ID']);
  $stmt->bindValue(':title', $_POST['title']);
  $stmt->bindValue(':desc', $_POST['desc']);
  $stmt->bindValue(':body', $_POST['body']);

  $stmt = $stmt->execute();
  header("location: post.php?id=".$_POST['date_ID']);
}
else if(!empty($_GET['id'])){
  $stmt = $db->prepare('SELECT * FROM posts WHERE date_ID = :id');
  $stmt->bindValue(':id', $_GET['id']);

  $stmt = $stmt->execute();
  $post = $stmt->fetchArray();
}

include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';
?>

<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em><?=$title?> Post</em></h1>
  </div>
</div>
<br>

<p>
  Remember, the post body is not the entire html but rather starts with the
  h1 heading and extends to the end of the text. It will be placed into the body similar to the input boxs on this page.
</p>
<form method="POST" action="post.php" autocomplete="off">
  <input type="hidden" name="update" value="<?=empty($post['date_ID'])? 'new': $post['date_ID']?>">
  <button class="btn btn-primary mb-3" type="submit">Save Post</button>
  <div class="form-row mb-3">
    <div class="col-sm-2">
      <label>Date ID</label>
      <input class="form-control" type="text" name="date_ID" placeholder="2018.12.31" value="<?=$post['date_ID']?>">
    </div>
    <div class="col-sm-10">
      <label>Title</label>
      <input class="form-control" type="text" name="title" placeholder="Title" value="<?=$post['title']?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <label>Description</label>
      <input class="form-control" type="text" name="desc" placeholder="Description" value="<?=$post['description']?>">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label>HTML</label>
      <textarea class="form-control" rows="20" name="body" placeholder="Your post's HTML body"><?=$post['body']?></textarea>
    </div>
  </div>
    
</form>

<?php include $sRoot.'templates/footer.php'; ?>
</html>