<?php
$menu_items = [
    [ 'a' => $sRoot.'archive.php', 'text' => 'Archive'],
    [ 'a' => $sRoot.'static/resume.pdf', 'text' => 'Resumé'],
    [ 'a' => 'http://www.github.com/jkuzniarek', 'text' => 'GitHub']
];
?><!-- Sidebar -->
<body class="h-100" style="word-wrap: break-word;">
    <div class="container-fluid h-100">
    <div class="row h-100">
    <!-- standard navbar -->
    <div class="col-md-2 bg-green sidebar d-none d-lg-block h-100 shadow" style="position: fixed; top: 0; z-index: 1030;">
        <nav class="navbar navbar-light border-bottom border-dark" style="padding-left: 0;">
            <a class="navbar-brand" href="./<?=$sRoot?>"><h1><img src="<?=$sRoot?>static/favicon.ico" height="30"> <span class="small">jkuzniarek.me</span></h1></a>
        </nav>
        <nav class="navbar navbar-light">
            <ul class="navbar-nav">
                <?php foreach($menu_items as $item){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$item['a']?>"><h3><?=$item['text']?></h3></a>
                </li>
                <?php }?>
            </ul>
        </nav>
        <p class="text-right border-top border-dark">
            <small class="text-dark">Created by Julien Kuzniarek</small>
        </p>
    </div>
    
    <!-- mobile navbar -->
    <div class="bg-green d-lg-none w-100" style="position: fixed; top: 0; z-index: 1030;">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="<?=$sRoot?>"><img src="<?=$sRoot?>static/favicon.ico" height="30">  <span style="size: 0.5em">jkuzniarek.me</span></a>
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
    </div>
    <div class="col-sm-3 h-100 d-none d-md-block bg-light"></div>
    <div class="col-sm-9 h-100 bg-light">
        <!-- this element prevents the page from appearring below the mobile navbar -->
        <div class="d-lg-none"><br><br><br></div>