<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

$stmt = $db->prepare('SELECT date_ID, title, [description] FROM posts ORDER BY date_ID DESC');

$stmt = $stmt->execute();
$posts = [];
while($row = $stmt->fetchArray()){
  $posts[]= $row;
}
?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Archive</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-sm-10">
    <div class="list-group list-group-flush">
    <?php
    foreach($posts as $post){ ?>
      <a href="post.php?id=<?=$post['date_ID']?>" class="list-group-item list-group-item-action nostyle-link">
      <strong><?=$post['date_ID']?></strong> - <?=$post['title']?><br>
      <?=$post['description']?>
      </a>
    <?php }?>
    </div>
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>