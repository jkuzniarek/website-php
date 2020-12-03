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
  <div class="col-lg-10">
      <div class="card-columns">

        <div class="card bg-none">
          <div class="card-body">
          <a href="EON/" class="btn btn-lg btn-block btn-light stretched-link">EON</a>
            <p class="card-text">
              <strong>Extended Object Notation</strong> 
              (EON) is a data description notation and programming language designed as a more user friendly alternative to XML with a JSON-like syntax.
              <br><small class="badge badge-light">Initiated: 2019, Last Updated: Dec 2020</small>
            </p>
          </div>
        </div>

        <div class="card bg-none">
          <div class="card-body">
          <a href="MSS/" class="btn btn-lg btn-block btn-light stretched-link">MSS</a>
            <p class="card-text">
              The <strong>Millennium Spelling System</strong> 
              (MSS) is my attempt at transforming American English into a form where words are truly spelled the way they sound.
              <br><small class="badge badge-light">Initiated: 2019, Last Updated: Aug 2020</small>
            </p>
          </div>
        </div>

      </div>
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>