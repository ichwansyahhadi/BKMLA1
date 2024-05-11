<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Bakamla2</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url();?>assets/images2/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url();?>assets/images2/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class=" col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="<?php echo base_url('ver2');?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="#" style="max-height: 53px;"/></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="<?php echo base_url('ver2');?>">Beranda</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('ver2');?>">Berita</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('ver2');?>">Profil</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('ver2');?>">Publikasi</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('Admin/Home');?>">Login</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-md-2">
                  <ul class="email text_align_right">
                     <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                     <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- top -->
      <div class="full_bg">
         <div class="slider_main">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <!-- carousel code -->
                     <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <!-- first slide -->
                           <div class="carousel-item active">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div  class="col-md-5">
                                       <div class="board">
                                          <i><img src="<?php echo base_url();?>assets/images2/top_icon.png" alt="#"/></i>
                                          <h3>
                                             <?php echo $dataEvent[0]->title; ?>
                                          </h3>
                                          <div class="link_btn">
                                             <a class="read_more" href="Javascript:void(0)">Read More   <span></span></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="banner_img">
                                          <figure><img class="img_responsive" src="<?php echo $dataEvent[0]->img_path; ?>"></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php for ($i=1; $i < count($dataEvent); $i++) {?>
                           <div class="carousel-item">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div  class="col-md-5">
                                       <div class="board">
                                          <h3>
                                             <?php echo $dataEvent[$i]->title; ?>
                                          </h3>
                                          <div class="link_btn">
                                             <a class="read_more" href="Javascript:void(0)">Read More   <span></span></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="banner_img">
                                          <figure><img class="img_responsive" src="<?php echo $dataEvent[$i]->img_path; ?>"></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php }?>
                        </div>
                        <!-- controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- our class -->
      <div class="class">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Our Youtube</h2>
                     <p>There are many video</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><iframe src="https://www.youtube-nocookie.com/embed/watch" style="position: absolute; right: 40px;"></iframe></i>
                     <h3>IMIC</h3>
                     <p>TV</p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box blue text_align_center">
                     <i><iframe src="https://www.youtube-nocookie.com/embed/VIssdcGXCDw" style="position: absolute; right: 40px;"></iframe></i>
                     <h3>IMIC</h3>
                     <p>TV</p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><iframe src="https://www.youtube-nocookie.com/embed/watch" style="position: absolute; right: 40px;"></iframe></i>
                     <h3>IMIC</h3>
                     <p>TV</p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end our class -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>About <br>IMIC</h2>
                     <p>Pembentukan IMIC pada dasarnya merupakan amanat UU sebagaimana pada pasal 63 ayat 1c UU no. 32/2014, pasal 4 ayat 1c Perpres 178 tahun 2014.
                     </p>
                     <div class="link_btn">
                        <a class="read_more" href="<?php echo base_url('ver2');?>">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img text_align_center">
                     <figure><img src="<?php echo base_url();?>assets/images/logo.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- skating -->
      <div class="skating">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>IMIC  Video</h2>
                     <p>There are many video</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="skating-box ">
                     <figure><iframe src="https://www.youtube-nocookie.com/embed/VIssdcGXCDw"></iframe></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="skating-box">
                     <figure><iframe src="https://www.youtube-nocookie.com/embed/VIssdcGXCDw"></iframe></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="skating-box">
                     <figure><iframe src="https://www.youtube-nocookie.com/embed/VIssdcGXCDw"></iframe></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end skating -->
      <!-- shop -->
      <div class="shop">
         <div class="container-fluid">
            <div class="row d_flex d_grid">
               <div class="col-md-7">
                  <div class="shop_img text_align_center" data-aos="fade-right">
                     <figure><img class="img_responsive" src="<?php echo base_url();?>assets/images/logo.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 order_1_mobile">
                  <div class="titlepage text_align_left ">
                     <h2>IMIC <br>Shop</h2>
                     <p>SHOP
                     </p>
                     <a class="read_more" href="<?php echo base_url('ver2');?>">Buy Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end shop -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage text_align_center">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <!-- start slider section -->
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test1.png" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box white_bg text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test2.png" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te2.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test3.png" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test2.png" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box white_bg text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test3.png" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te2.png" alt="#"/>
                                          <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test1.png" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test3.png" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box  white_bg text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test1.png" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te2.png" alt="#"/>
                                          <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="<?php echo base_url();?>assets/images2/test2.png" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="<?php echo base_url();?>assets/images2/te.png" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 ">
                     <div class="infoma">
                        <h3>Contact Us</h3>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i>MAP IMIC 
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Call +62 1234567890</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> demo@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row border_left">
                        <div class="col-md-12">
                           <div class="infoma">
                              <h3>Newsletter</h3>
                              <?php 
                                 $attributes = array("id" => "newsletter", "name" => "newsletter", "class" => "form_subscri");
                                 echo form_open("newsletter/regist", $attributes);
                              ?>
                              <!-- <form class="form_subscri"> -->
                                 <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                    <div class="col-md-4">
                                       <input class="newsl" placeholder="Enter your email" type="email" name="registEmail" id="registEmail">
                                    </div>
                                    <div class="col-md-4">
                                       <button type="submit" class="subsci_btn">subscribe</button>
                                    </div>
                                 </div>
                              <!-- </form> -->
                              <?php echo form_close(); ?>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="infoma">
                              <h3>Useful Link</h3>
                              <ul class="fullink">
                                 <li><a href="<?php echo base_url('ver2');?>">Home</a></li>
                                 <li><a href="<?php echo base_url('ver2');?>">About</a></li>
                                 <li><a href="<?php echo base_url('ver2');?>">Skating</a></li>
                                 <li><a href="<?php echo base_url('ver2');?>">Shop</a></li>
                                 <li><a href="<?php echo base_url('ver2');?>">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="infoma text_align_left">
                              <ul class="social_icon">
                                 <li><a href="https://wa.me/+6281227901702"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url();?>assets/js2/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/js2/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url();?>assets/js2/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url();?>assets/js2/custom.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>