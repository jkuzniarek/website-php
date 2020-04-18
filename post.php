<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

$stmt = $db->prepare('SELECT * FROM posts WHERE date_ID = :id');
$stmt->bindValue(':id', $_GET['id']);

$stmt = $stmt->execute();
$post = $stmt->fetchArray();

?>

<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em><?= $post['title']?></em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-lg-10">
    <?=$post['body']?>
  </div>
</div>
<?php include $sRoot.'templates/footer.php'; ?>
</html>