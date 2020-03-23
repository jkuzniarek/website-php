<?php 
require_once 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

$stmt = $db->query('SELECT * FROM posts ORDER BY date_ID DESC LIMIT 1');
$latest = $stmt->fetchArray();

?>

<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Welcome</em><?=$icon?></h1>
  </div>
</div>

<div class="row py-3"> <!-- Latest Row-->
  <div class="col-sm-10">
    <br>
    <div class="card shadow">
      <div class="card-body">
        <h4 class="card-title">
          <?=$latest['date_ID']?>: <small>
          <a href="post.php?id=<?=$latest['date_ID']?>">
          <?=$latest['title']?>
          </a></small>
        </h4><hr>
        <p>
          <?=$latest['description']?> 
          <a href="post.php?id=<?=$latest['date_ID']?>"><small>Read More</small></a>
        </p>
      </div>
    </div>

  </div>
</div>
<br>

<div class="row py-3"> <!-- Content Row-->
  <div class="col-sm-10">
    <div class="media border p-3">
      <div class="media-body">
        <p>
          Hi, my name is Julien Kuzniarek and I'm a Web Developer at the 
          <a href="www.usf.edu">University of South Florida</a> 
          in Tampa where I build and maintain the Department of Research & Innovation's internal web applications. 
        </p>
        <p>
          Though I originally built this website as a portfolio project several years ago, it has evolved since then through several iterations as both my skills and interests have changed.
          Now, it provides a place for me to share some of my thoughts and projects with the world. 
          The latest version of this site has been built with a PHP backend, a Bootstrap 4 and jQuery frontend, and utilizes a SQLite database.
          Like the other times I've rebuilt my website, the primary purpose has been to expand 
          my knowledge and web development experience using at least one new technology.
          In this case, I sought to gain experience with Bootstrap 4 after having previously used 3, and expand on my SQL knowledge by utilizing a SQLite database.
        </p>
        <p>
          My personal interests include: anthropology, urban planning, mass transit, history, philosophy, hiking, reading, and occasionally video games.
          Many of these subjects interest me due to my fascination with systems
          analysis and design combined with my propensity to examine both the impact of the
          perspectives people hold on their actions and decisions, and the
          cascading effects that can occur from small changes to a system.
        </p>
      </div>
    </div>
  </div>
</div>
<?php include $sRoot.'templates/footer.php'; ?>
</html>