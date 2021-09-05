<?php 
include 'config.php';
include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';

?>
<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Recommended Reading</em><?=$icon?></h1>
  </div>
</div>
<br>
<div class="row"> <!-- Content Row-->
  <div class="col-lg-10">
    <div class="row">

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>A New Kind Of Science</h3>
            <p>Stephen Wolfram <hr> Theoretical Computing</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The Power Of Myth with Bill Moyers</h3>
            <p>Joseph Campbell <hr> Spirituality / Religion / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>How To Do Nothing</h3>
            <p>Jenny Odell <hr> Mindfulness / Localism</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>"Surely You're Joking, Mr. Feynman!"</h3>
            <p>Richard P. Feynman <hr> Biography / Humor</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>"What Do <span style="text-decoration: underline;">You</span> Care What Other People Think?"</h3>
            <p>Richard P. Feynman <hr> Biography / Science</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>Human, All Too Human</h3>
            <p>Frederick Nietsche <hr> Philosophy</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The Autobiography Of Malcom X</h3>
            <p>Malcom X <hr> Biography / Civil Rights</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The Art Of Inequality: Architecture, Housing, And Real Estate</h3>
            <p>Reinhold Martin, Jacob Moore, Susanne Schindler <hr> Architecture / Economics / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>American Nations</h3>
            <p>Colin Woodard <hr> History / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>How The Scots Invented The Modern World</h3>
            <p>Arthur Herman <hr> History / Scottish Enlightment</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The Artist, The Philosopher, And The Warrior</h3>
            <p>Paul Strathern <hr> History / Biographical / Italian Renaissance</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The Prophet</h3>
            <p>Kahlil Gibran <hr> Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>The WEIRDest People In The World</h3>
            <p>Joseph Henrich <hr> Culture / Psychology</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>Ender's Game (and sequels)</h3>
            <p>Orson Scott Card <hr> Science Fiction</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h3>Foundation (and sequels)</h3>
            <p>Isaac Asimov <hr> Science Fiction</p>
          </div>
        </div>
      </div>

    </div>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>