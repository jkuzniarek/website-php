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
  <div class="col-md-10">
    <div class="row">
      <div class="col">
        <div class="card bg-none mb-3" style="min-width:250px;">
          <div class="card-body">
            <h3 class="card-title green">EON</h3>
            <p class="card-text mb-0">
              <strong>Extended Organizing Notation</strong> 
              (EON) is a data description notation designed as a more user friendly alternative to XML
              with an associated programming language influenced by C, Go, JavaScript, and Vale (https://vale.dev).
              <br><a href="EON/" class="btn btn-sm btn-light stretched-link">View</a>
            </p>
            <hr class="my-1">
            <small class="badge badge-light">Last Updated: Aug 2022</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-none mb-3" style="min-width:250px;">
          <div class="card-body">
          <h3 class="card-title green">MSS</h3>
            <p class="card-text mb-0">
              The <strong>Millennium Spelling System</strong> 
              (MSS) is my attempt at transforming American English into a form where words are truly spelled the way they sound.
              <br><a href="MSS/" class="btn btn-sm btn-light stretched-link">View</a>
            </p>
            <hr class="my-1">
            <small class="badge badge-light">Last Updated: Aug 2021</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-none mb-3" style="min-width:250px;">
          <div class="card-body">
          <h3 class="card-title green">Recommended Reading</h3>
            <p class="card-text mb-0">
              A list of books and other works that I've found interesting and recommend that you read.
              <br><a href="reading/" class="btn btn-sm btn-light stretched-link">View</a>
            </p>
            <hr class="my-1">
            <small class="badge badge-light">Last Updated: Sep 2021</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>