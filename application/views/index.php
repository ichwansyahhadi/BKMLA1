<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakamla1</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/slider.css">
<script src="<?php echo base_url();?>assets/js/jquery-1.7.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>assets/js/tms-0.4.1.js"></script>
<script src="<?php echo base_url();?>assets/js/cufon-yui.js"></script>
<script src="<?php echo base_url();?>assets/js/cufon-replace.js"></script>
<script src="<?php echo base_url();?>assets/js/Kozuka_L_300.font.js"></script>
<script src="<?php echo base_url();?>assets/js/Kozuka_B_700.font.js"></script>
<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 10000,
        preset: 'zoomer',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: 'fade',
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<!--==============================header=================================-->
<header>
  <div class="main">
    <h1><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" style="max-width: 100px;"></a></h1>
    <div class="social-icons"> <span>Follow Us:</span>
      <div> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<nav>
  <ul class="menu">
    <li class="current"><a href="<?php echo base_url();?>">Beranda</a></li>
    <li><a href="<?php echo base_url();?>">Berita</a></li>
    <li><a href="<?php echo base_url();?>">Profil</a></li>
    <li><a href="<?php echo base_url();?>">Publikasi</a></li>
    <li><a href="<?php echo base_url();?>">Gallery</a></li>
    <li><a href="<?php echo base_url();?>">Kontak</a></li>
  </ul>
  <div class="clear"></div>
</nav>
<div id="slide">
  <div class="slider">
    <ul class="items">
      <?php foreach ($dataEvent as $data) {?>
      <li><img src="<?php echo $data->img_path; ?>" alt="">
        <div class="banner">
          <p class="extra-wrap"><strong><?php echo $data->title; ?></strong><span><?php echo $data->description; ?></span></p>
          <a href="#">Read More</a></div>
      </li>
      <?php }?>
    </ul>
  </div>
  <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
<!--==============================content================================-->
<section id="content">
  <div class="container_12 top-1">
    <div class="grid_4 box-1"> 
      <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/watch" frameborder="0" …=""></iframe>
      <a href="#"><span class="clr-1">IMIC</span>  TV</a> 
    </div>
    <div class="grid_4 box-1">
      <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/VIssdcGXCDw" frameborder="0" …=""></iframe>
      <a href="#"><span class="clr-1">IMIC</span>  TV</a> 
    </div>
    <div class="grid_4 box-1">
      <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube-nocookie.com/embed/watch" frameborder="0" …=""></iframe>
      <a href="#"><span class="clr-1">IMIC</span>  TV</a> 
    </div>
    <div class="grid_12">
      <div class="line pad-1"></div>
    </div>
    <div class="grid_4">
      <h2 class="p2">Berita</h2>
      <img src="<?=site_url().$highestrating[0]->img_path?>" alt="" style="width:100%; height:220px">
      <p class="text-1 top-2 p3"><?=$highestrating[0]->title?></p>
      <p><?=$highestrating[0]->description?></p>
      <a href="#" class="button top-3">Read More</a> </div>
    <div class="grid_4">
      <div class="left-1">
        <h2 class="p4">Pengumuman</h2>
        <div class="wrap">
          <div class="number">1</div>
          <p class="extra-wrap border-bot-1"><span class="clr-1"><?=$announcement[0]->title?></span><br>
            <?=strip_tags($announcement[0]->description)?></p>
        </div>
        <div class="wrap">
          <div class="number">2</div>
          <p class="extra-wrap border-bot-1"><span class="clr-1"><?=$announcement[1]->title?></span><br>
            <?=strip_tags($announcement[2]->description)?></p>
        </div>
        <div class="wrap">
          <div class="number">3</div>
          <p class="extra-wrap"><span class="clr-1"><?=$announcement[2]->title?></span><br>
            <?=strip_tags($announcement[2]->description)?></p>
        </div>
      </div>
    </div>
    <div class="grid_4">
      <div class="left-2">
        <h2 class="p4">Buletin</h2>
        <div class="wrap border-bot-1"> <img src="<?=site_url().$magazine[0]->img_path?>" alt="" style="width:110px; height:110px" class="img-indent">
          <p class="extra-wrap"><span class="clr-1"><?=$magazine[0]->title?></span><br>
            <a href="#" class="link"><?=date("M d, Y", strtotime($magazine[0]->created_at))?></a><br>
            <?=strip_tags($magazine[0]->description)?></p>
        </div>
        <div class="wrap border-bot-1"> <img src="<?=site_url().$magazine[1]->img_path?>" alt="" style="width:110px; height:110px" class="img-indent">
          <p class="extra-wrap"><span class="clr-1"><?=$magazine[1]->title?></span><br>
            <a href="#" class="link"><?=date("M d, Y", strtotime($magazine[1]->created_at))?></a><br>
            <?=strip_tags($magazine[1]->description)?></p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="footer-col-1">
    <ul class="list-1">
    <h3>Kontak Kami</h3>
      <li><a href="#">Bakamla</a></li>
      <li><a href="#">Bakamla</a></li>
      <li><a href="#">Bakamla</a></li>
    </ul>
  </div>
  <div class="footer-col-2">
    <h3>Address</h3>
    <dl class="adrss">
      <dd><span>Country:</span>IDN</dd>
      <dd><span>City:</span>Jakarta</dd>
      <dd><span>Email:</span><a href="#" class="link">puskodal@bakamla.go.id</a></dd>
    </dl>
  </div>
  <div class="footer-col-3">
    <h3>Cari</h3>
    <form id="form-search" method="post" action="#">
      <input type="text" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''">
      <a href="#"></a>
    </form>
  </div>
  <div class="footer-col-4">
    <p>© Indonesia Maritime Information Centre<br>
      Hak Cipta IMIC ©2024</a></p>
  </div>
</footer>
<script>Cufon.now();</script>
</body>
</html>
