<?php
$menu_items = [
    [ 'a' => 'projects/', 'text' => 'Projects'],
    [ 'a' => 'archive.php', 'text' => 'Archive'],
    [ 'a' => 'static/resume.pdf', 'text' => 'Resumé'],
    [ 'a' => 'http://www.github.com/jkuzniarek', 'text' => 'GitHub']
];
?><!-- Sidebar -->
<body class="h-100" style="word-wrap: break-word;">

      <!-- mobile navbar -->
      <nav class="navbar navbar-light bg-green d-lg-none w-100" style="position: fixed; top: 0; z-index: 1030;">
        <a class="navbar-brand" href="<?=$sRoot?>"><img src="<?=$sRoot?>static/favicon.ico" height="30">
          <span style="size: 0.5em">jkuzniarek.me</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="mobileNavbar">
          <ul class="navbar-nav">
            <?php foreach($menu_items as $item){ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?=$item['a']?>"><h2><?=$item['text']?></h2></a>
            </li>
            <?php }?>
          </ul>
          <p class="text-right border-top border-dark navbar-text">
            <small class="text-dark">Created by Julien Kuzniarek</small>
          </p>
        </div>
      </nav>

  <div class="container-fluid h-100 ">
    <div class="row h-100">
      <!-- standard sidebar -->
      <div class="col-lg-2 bg-green sidebar d-none d-lg-block h-100 shadow" style="position: fixed; top: 0; z-index: 1030;">
        <nav class="navbar navbar-light border-bottom border-dark" style="padding-left: 0;">
          <a class="navbar-brand" href="./<?=$sRoot?>"><h3>Home</h3></a>
          <a class="" href="./<?=$sRoot?>"><h3><?=$icon?></h3></a>
        </nav>
        <nav class="navbar navbar-light">
          <ul class="navbar-nav">
            <?php foreach($menu_items as $item){ ?>
            <li class="nav-item<?=strpos($_SERVER['REQUEST_URI'], $item['a']) !== false ? ' active': ''?>">
              <a class="nav-link" href="<?=$item['text'] == 'GitHub'? $item['a']: $sRoot.$item['a']?>"><h4><?=$item['text']?></h4></a>
            </li>
            <?php }?>
          </ul>
        </nav>
        <p class="text-right border-top border-dark">
          <small class="text-dark">Created by Julien Kuzniarek</small>
        </p>
      </div>
    
      <div class="col-lg-3 h-100 d-none d-lg-block"></div>
      <div class="col-lg-9 h-100 ">
        <!-- this element prevents the page from appearing below the mobile navbar -->
        <div class="d-lg-none"><br><br><br></div>