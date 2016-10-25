<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AssetPie | Admin</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skin-blue.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" />

      <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-slider.css" /> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.2/css/bootstrap-slider.css" />


      <link rel="stylesheet" href="<?php echo base_url();?>assets/font/stylesheet.css">



      
      <?php 
        if(isset($css_files)){
          foreach($css_files as $files){ ?>
          <link type="text/css" rel="stylesheet" href="<?php echo $files; ?>" />
      <?php  }
        } 
      ?>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/media.css">
      
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cust_style.css">


      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <!--
      BODY TAG OPTIONS:
      =================
      Apply one or more of the following classes to get the
      desired effect
      |---------------------------------------------------------|
      | SKINS         | skin-blue                               |
      |               | skin-black                              |
      |               | skin-purple                             |
      |               | skin-yellow                             |
      |               | skin-red                                |
      |               | skin-green                              |
      |---------------------------------------------------------|
      |LAYOUT OPTIONS | fixed                                   |
      |               | layout-boxed                            |
      |               | layout-top-nav                          |
      |               | sidebar-collapse                        |
      |               | sidebar-mini                            |
      |---------------------------------------------------------|
      -->
   <body class="hold-transition skin-blue sidebar-mini">


       <header class="main-header">
           
            <nav class="navbar navbar-static-top" role="navigation">

                <div class="row">
                  <div class="col-md-6 col-xs-8">
                    <a href="#" class="logo">
                       <img class="img-responsive" src="<?=base_url()?>/assets/img/logo.jpg">
                    </a>
                  </div>
                  <div class="col-md-6 col-xs-4">
                      <div class="right-icons">
                        <img class="img-responsive" src="<?=base_url()?>/assets/img/search-icon.png">
                        <img class="img-responsive" src="<?=base_url()?>/assets/img/noti-icon.png">
                      </div>
                  </div>

                      <a href="#" class="sidebar-toggle nav-icon" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                       </a>

<!--                        <div class="navbar-custom-menu">
                          <ul class="nav navbar-nav">
                          </ul>
                       </div> -->
                </div>

            </nav>
         </header>



      <div class="wrapper">


        
         <aside class="main-sidebar">
            <section class="sidebar">
               <div class="user-panel">


                  <!-- img-circle profile -->
                  <img src="<?php echo base_url()?>/assets/img/online.png" class="" alt="User Image">

                  <!-- <div class="pull-left image">
                     <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p> Administrator</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div> -->
               </div>
<!--                <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                     </span>
                  </div>
               </form> -->
               <ul class="sidebar-menu">

<!--                  <li class="header">HEADER</li>
                 <li class="active">
                    <a href="<?php echo base_url()?>admin/entities">
                      <i class="fa fa-link"></i> 
                      <span>Entities</span>
                    </a>
                 </li>
                 <li>
                    <a href="<?php echo base_url()?>admin/events">
                      <i class="fa fa-link"></i> 
                      <span>Events</span>
                    </a>
                 </li>
                 <li>
                    <a href="<?php echo base_url()?>admin/events">
                      <i class="fa fa-link"></i> 
                      <span>Clubs</span>
                    </a>
                 </li> -->
                 <li class="treeview active">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu1.png">
                      <span>VISIONBOARD</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <!-- <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Entities</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Entities</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Events</a></li>
                    </ul> -->
                 </li>
                 <li class="treeview">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu2.png">
                      <span>VIRTUAL OFFICE</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <!-- <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-map"></i> Event Types (MAP)</a></li>
                       <li><a href="#"><i class="fa fa-list-ul"></i> Event Types (LIST)</a></li>
                       <li><a href="#"><i class="fa fa-database"></i> All Events</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Events</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Events</a></li>
                    </ul> -->
                 </li>
                 <li class="treeview">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu3.png">
                      <span>ADVISOR</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <!-- <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul> -->
                 </li>

                 <li class="treeview">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu5.png">

                      <span>KNOWLEDGE BANK</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i>NEWS LETTERS</a></li>
                       <li><a href="#"><i class="fa fa-check"></i>TRANING</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i>EVENTS</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i>GLOSSARY</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i>BLOGS</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i>RATIOS</a></li>



                    </ul>
                 </li>

                 <li class="treeview">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu5.png">
                      <span>EXPENSE TRACKER</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <!-- <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul> -->
                 </li>

                 <li class="treeview">
                    <a href="#">
                      <!-- <i class="fa fa-list"></i>  -->
                      
                      <img class="padlf5" src="<?= base_url();?>assets/img/menu6.png">

                      <span>TOOLS</span>
                    <!-- <span class="pull-right-container"> -->
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                    </a>
                    <!-- <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul> -->
                 </li>
              </ul>
            </section>
         </aside>