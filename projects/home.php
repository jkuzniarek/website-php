<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Projects</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-sm-10">
      <div class="card-columns">

        <div class="card bg-none">
          <div class="card-body">
          <a href="SASS/" class="btn btn-lg btn-block btn-light stretched-link">SASS</a>
            <p class="card-text">
              The <strong>Standardized American Spelling System</strong> 
              (SASS) is my attempt at transforming American English into a form where words are truly spelled the way they sound.
            </p>
          </div>
        </div>

      </div>
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>