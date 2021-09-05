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
            <h4>A New Kind Of Science</h4>
            <p>Stephen Wolfram <hr> Theoretical Computing</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The Power Of Myth with Bill Moyers</h4>
            <p>Joseph Campbell <hr> Spirituality / Religion / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>How To Do Nothing</h4>
            <p>Jenny Odell <hr> Mindfulness / Localism</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>"Surely You're Joking, Mr. Feynman!"</h4>
            <p>Richard P. Feynman <hr> Biography / Humor</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>"What Do <span style="text-decoration: underline;">You</span> Care What Other People Think?"</h4>
            <p>Richard P. Feynman <hr> Biography / Science</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>Human, All Too Human</h4>
            <p>Frederick Nietsche <hr> Philosophy</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The Autobiography Of Malcom X</h4>
            <p>Malcom X <hr> Biography / Civil Rights</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The Art Of Inequality: Architecture, Housing, And Real Estate</h4>
            <p>Reinhold Martin, Jacob Moore, Susanne Schindler <hr> Architecture / Economics / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>American Nations</h4>
            <p>Colin Woodard <hr> History / Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>How The Scots Invented The Modern World</h4>
            <p>Arthur Herman <hr> History / Scottish Enlightment</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The Artist, The Philosopher, And The Warrior</h4>
            <p>Paul Strathern <hr> History / Biographical / Italian Renaissance</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The Prophet</h4>
            <p>Kahlil Gibran <hr> Culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>The WEIRDest People In The World</h4>
            <p>Joseph Henrich <hr> Culture / Psychology</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>Ender's Game (and sequels)</h4>
            <p>Orson Scott Card <hr> Science Fiction</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h4>Foundation (and sequels)</h4>
            <p>Isaac Asimov <hr> Science Fiction</p>
          </div>
        </div>
      </div>

    </div>
    
  </div>
</div>

<?php include $sRoot.'templates/footer.php'; ?>
</html>