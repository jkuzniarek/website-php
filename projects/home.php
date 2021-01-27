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
  <div class="col-md-12">

        <div class="card bg-none m-3" style="min-width:250px;">
          <div class="card-body">
            <h3 class="card-title green">EON</h3>
            <p class="card-text">
              <strong>Extended Object Notation</strong> 
              (EON) is a data description notation and programming language designed as a more user friendly alternative to XML with a JSON-like syntax.
            </p>
            <hr>
            <small class="badge badge-light">Initiated: 2019</small>
            <small class="badge badge-light">Last Updated: Jan 2021</small>
            <a href="EON/" class="btn btn-sm btn-light stretched-link float-right">View</a>
          </div>
        </div>

        <div class="card bg-none m-3" style="min-width:250px;">
          <div class="card-body">
          <h3 class="card-title green">MSS</h3>
            <p class="card-text">
              The <strong>Millennium Spelling System</strong> 
              (MSS) is my attempt at transforming American English into a form where words are truly spelled the way they sound.
            </p>
            <hr>
            <small class="badge badge-light">Initiated: 2019</small>
            <small class="badge badge-light">Last Updated: Aug 2020</small>
            <a href="MSS/" class="btn btn-sm btn-light stretched-link float-right">View</a>
          </div>
        </div>

  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>