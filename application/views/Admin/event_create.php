<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin| PhinisiTrek.com </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/formhelper/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/froala/css/froala_editor.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/froala/css/froala_style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/code_view.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/colors.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/emoticons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/char_counter.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/froala/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  </head>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;background-color: #ffffff;">
              <a href="<?=site_url('Admin/Home/dashboard');?>" class="site_title"><img src="<?=base_url();?>assets/images/jalanaja.png" alt="logo" style="width:50px;height:50px"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/account.gif" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $sessionData['username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                      <a href="<?=site_url('Admin/ManageStory');?>"><i class="fa fa-camera-retro"></i> Story Management</a>
                  </li>
                  <li>
                      <a href="<?=site_url('Admin/ManageComment');?>"><i class="fa fa-comments-o"></i> Comment Management</a>
                  </li>
                  <li>
                      <a href="<?=site_url('Admin/ManageUser');?>"><i class="fa fa-user"></i> User Management</a>
                  </li>
                  <li>
                      <a href="<?=site_url('Admin/ManageEvent');?>"><i class="fa fa-calendar"></i> Event Management</a>
                  </li>
                  <li><a href="#risk"><i class="fa fa-bar-chart"></i> Traffic Management <span class="fa fa-chevron-down"></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('Admin/ManageTraffic/trafficUser');?>">User</a></li>
                      <li><a href="<?=site_url('Admin/ManageTraffic/trafficStory');?>">Story</a></li>
                    </ul>
                  </li>
                  <li>
                      <a href="<?=site_url('Admin/ManageQuote');?>"><i class="fa fa-quote-right"></i> Quote Management</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/images/account.gif" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?=site_url("/");?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?php echo $notification->num_rows(); ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <?php foreach ($notification->result() as $data) {
                    # code...
                  ?>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url(); ?>assets/images/system.png" alt="Profile Image" /></span>
                        <span>
                          <span>System</span>
                        </span>
                        <span class="message">
                          You have received <?php echo $data->Total.' '.$data->Message;?>
                        </span>
                      </a>
                    </li>
                  <?php }?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Events <small> </small></h3>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Event Form</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                    <?php 
                    $attributes = array("id" => "eventform", "name" => "eventform");
                    echo form_open_multipart("Admin/ManageEvent/insert", $attributes);
                    ?>
                      <div class="col-md-12">
                        <label for="title">Event Title:</label>
                        <input type="text" id="title" class="form-control" name="title">
                      </div>
                      <div class="col-md-12">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <label for="title">Event Date:</label>
                        <input type="text" name="date" id="date" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="title">Event Province:</label>
                            <select class="form-control" id="provinsi" name="provinsi">
                              <?php
                              foreach($provinsi as $provlist){?>
                              <option value="<?=$provlist->id.'|'.$provlist->provinsi?>" <?php if(isset($id_provinsi) && $id_provinsi == $provlist->id.'|'.$provlist->provinsi){echo 'selected';}?>><?=$provlist->provinsi?></option><?php
                              };
                              ?>
                            </select>
                      </div>
                      <div class="col-md-12">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <label for="title">Event Langitude:</label>
                        <input type="text" id="lang" class="form-control" name="lang">
                      </div>
                      <div class="col-md-6">
                        <label for="title">Event Longitude:</label>
                        <input type="text" id="long" class="form-control" name="long">
                      </div>
                      <div class="col-md-12">
                        &nbsp;
                      </div>
                      <div class="col-md-12">
                        <label for="description">Event Description:</label>
                        <textarea name="description" id="description" style="width:100%" class="form-control"></textarea>
                      </div>
                      <div class="col-md-12">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                          <input type="file" class="btn btn-default" name="image" onchange="readURL(this);">
                      </div>
                      <div class="col-md-offset-10">
                           <button type="submit" name="submit" class="btn btn-success">Create Event</button>  
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <img id="picture" style='width:100%;' border="0"></img>
                        </div>
                      </div>
                    <?php echo form_close(); ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href="https://phinisitrek.com">PhinisiTrek.com</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/froala/js/froala_editor.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/align.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/char_counter.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/code_beautifier.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/code_view.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/colors.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/draggable.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/emoticons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/entities.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/font_size.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/font_family.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/fullscreen.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/line_breaker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/inline_style.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/link.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/lists.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/paragraph_format.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/paragraph_style.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/quick_insert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/quote.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/table.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/save.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/froala/js//plugins/url.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/formhelper/dist/js/bootstrap-formhelpers.min.js"></script>
    <script>
        $(function() {
            $('#description').froalaEditor({
                height: 200
            })
        });
    </script>
    <script type="text/javascript">
      $(function() {

        $('input[name="date"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

      });
    </script>
        <script>
        $(function() {
            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function() {
                var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
          });

          // We can watch for our custom `fileselect` event like this
          $(document).ready( function() {
              $(':file').on('fileselect', function(event, numFiles, label) {

                  var input = $(this).parents('.input-group').find(':text'),
                      log = numFiles > 1 ? numFiles + ' files selected' : label;

                  if( input.length ) {
                      input.val(log);
                  } else {
                      if( log ) alert(log);
                  }
              });
          });  
        });

        function readURL(input) {
            if (input.files && input.files[0] && input.files[0].size < 2048000) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#picture')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
            else{
              alert("Maksimal File size adalah 2 MB");
              document.getElementById("listimg").value = '';
            }
        }
        <?php if(isset($img_path)){?>
          $('#picture')
            .attr('src', <?="'".base_url().$img_path."'"?>);
        <?php }?>
    </script>
    <!-- /validator -->
  </body>
</html>
