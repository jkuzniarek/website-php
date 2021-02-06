<?php 
require_once 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

$stmt = $db->query('SELECT * FROM posts ORDER BY date_ID DESC LIMIT 1');
$latest = $stmt->fetchArray();

?>

<!-- <div class="row py-3"> Title Row
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Welcome</em><?=$icon?></h1>
  </div>
</div> -->

<div class="row py-3"> <!-- Latest Row-->
  <div class="col-lg-10">
    <br>
    <div class="card bg-none">
      <div class="card-body">
        <h4>
          <?=$latest['date_ID']?>: 
          <a href="post.php?id=<?=$latest['date_ID']?>" class="btn btn-lg btn-light stretched-link">
          <?=$latest['title']?>
        </a>
        </h4>
        <hr class="mt-0">
        <p>
          <?=$latest['description']?> 
          <!-- <a href="post.php?id=<?=$latest['date_ID']?>"><small>Read More</small></a> -->
        </p>
      </div>
    </div>
    <br>

        <p>
          Hi, my name is Julien Kuzniarek and I'm a Web Developer at the 
          <a href="http://www.usf.edu">University of South Florida</a> 
          in Tampa where I build and maintain the Department of Research & Innovation's internal web applications. 
        </p>
        <p>
          Though I originally built this website as a portfolio project several years ago, it has evolved since then through several iterations as both my skills and interests have changed.
          Like the other times I've rebuilt my website, the primary purpose was to expand 
          my knowledge and web development experience by trying out new technologies.
          Now though, it also provides a place for me to share some of my thoughts and projects with the world. 
        </p>
        <p>
          Some of my interests include: anthropology, urban planning, mass transit, history, philosophy, hiking, reading, and of course computer programming.
          Many of these subjects interest me due to my fascination with systems
          analysis and design combined with my propensity to examine both the impact of the
          perspectives people hold on their actions and decisions, and the
          cascading effects that can occur from small changes to a system.
        </p>
        
  </div>
</div>
<?php include $sRoot.'templates/footer.php'; ?>
</html>