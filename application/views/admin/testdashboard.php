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
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-slider.css" />
      <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cust_style.css"> -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/font/stylesheet.css">
      <?php 
        if(isset($css_files)){
          foreach($css_files as $files){ ?>
          <link type="text/css" rel="stylesheet" href="<?php echo $files; ?>" />
      <?php  }
        } 
      ?>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!--
          CSS Need to be added in external file
      -->
      <style type="text/css">

        html,body {
            font-family: montserratregular;
        }

        b{
            font-family: montserratextrabold;
        }

        h1, h2, h3, h4, h5, p, span, div, section{
            font-family: montserratlight;
            margin: 10px;
        }

        body{
          background: #f7f7f7;
        }

        .main-header{
          background: #fff;
        }

        .profile{
            width: 100%;
        }

        .profile-holder{
            border-radius: 50%;
            padding: 2%;
            border: solid #f1f1f1 1px;
        }

        .user-panel{
          padding: 4% 25%;
        }

        .infomark{
          width: 100%;
          text-align: center;
          padding: 2%;
          color: #f1f1f1;
          font-weight: bold; 
        }

        a{
          color: #fff;
          text-transform: none;
          text-decoration: none;
        }

        .sidebar-menu>li{
          border: 1px dotted #313031;
          padding: 5px 0;
        }

        .treeview-menu{
          background: #706e6d;
        }

        .active{
          border-left: 5px #f17064 solid !important;
          border-top: 1px dotted #313031;
          border-right: 1px dotted #313031;
          border-bottom: 1px dotted #313031;
        }

        #exTab1{
          width: 100%;
        }

        .nav-pills>li{
          width: 25%;
          border: 1px solid #313031;
        }

        .nav-pills>li+li{
          margin: 0;
        }



        .circles{
            margin:0px auto;
        }
        .circles > div {
            overflow:hidden;
            float:left;
            width:auto;
            height:auto;
            position: relative;
            border-radius:50%;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            -khtml-border-radius: 50%;
            background:#eee;
        }

        .circles > div > div {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .circles > div > div > div {
            display: table;
            width: 100%;
            height: 100%;
        }
        .circles > div > div > div > div {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        @media (max-width: 320px)
        {
            .circles > div {padding: 100%;}
        }

        @media (min-width: 321px) and (max-width: 800px)
        {
            .circles > div {padding: 50%;}
        }

        @media (min-width: 801px)
        {
            .circles{width:800px}
            .circles > div {padding: 25%;}
        }

      </style>

   </head>
   <body class="hold-transition sidebar-mini">
      <!-- <div class="container"> -->
          <header class="main-header">
            <a href="<?=base_url()?>" class="logo">
               <span class="logo-mini"><b>A</b>P</span>
               <img class="img-responsive" src="<?=base_url()?>/assets/img/logo.jpg">
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 9 tasks</li>
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                       <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                       </h3>
                                       <div class="progress xs">
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                             <span class="sr-only">20% Complete</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer">
                              <a href="#">View all tasks</a>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 10 notifications</li>
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer"><a href="#">View all</a></li>
                        </ul>
                     </li>
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <img src="<?php echo base_url()?>/assets/img/user.jpg" class="user-image" alt="User Image">
                           <span class="hidden-xs">
                              Administrator
                           </span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="user-header">
                              <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                              <p>
                                 Administrator
                              </p>
                           </li>

                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="<?php echo base_url()?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
          </header>
           <aside class="main-sidebar" style="background: #525152">
              <section class="sidebar" style="margin: 0;">
                <div class="user-panel">
                  <div class="profile-holder">
                     <img src="<?php echo base_url()?>/assets/img/profile.jpg" class="img-circle profile" alt="User Image">
                  </div>
                  <div class="infomark">
                     <p> Administrator <i class="fa fa-circle text-success"></i></p>
                  </div>
                </div>
                 <ul class="sidebar-menu">
                   <li class="active">
                      <a href="<?php echo base_url()?>admin/entities">
                        <i class="fa fa-link"></i> 
                        <span>VISIONBOARD</span>
                      </a>
                   </li>
                   <li>
                      <a href="<?php echo base_url()?>admin/events">
                        <i class="fa fa-link"></i> 
                        <span>VIRTUAL OFFICE</span>
                      </a>
                   </li>
                   <li>
                      <a href="<?php echo base_url()?>admin/events">
                        <i class="fa fa-link"></i> 
                        <span>ADVISORS</span>
                      </a>
                   </li>
                   <li class="treeview active">
                      <a href="#"><i class="fa fa-list"></i> <span>KNOWLEDGE BANK</span>
                      <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                      </span>
                      </a>
                      <ul class="treeview-menu">
                         <li><a href="#"><i class="fa fa-database"></i>NEWSLETTERS</a></li>
                         <li><a href="#"><i class="fa fa-check"></i> TRAINING</a></li>
                         <li><a href="#"><i class="fa fa-cut"></i>EVENTS</a></li>
                         <li><a href="#"><i class="fa fa-cut"></i>GLOSSARY</a></li>
                         <li><a href="#"><i class="fa fa-cut"></i>BLOGS</a></li>
                         <li><a href="#"><i class="fa fa-cut"></i>RATIOS</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="<?php echo base_url()?>admin/events">
                        <i class="fa fa-link"></i> 
                        <span>EXPENSE TRACKER</span>
                      </a>
                   </li>
                   <li>
                      <a href="<?php echo base_url()?>admin/events">
                        <i class="fa fa-link"></i> 
                        <span>TOOLS</span>
                      </a>
                   </li>
                </ul>
              </section>
           </aside>
           <div class="content-wrapper">
              <section class="content-header text-center">
                <h2><b>Good Morning, Smitesh</b></h2>
                <h3 class="light">WELCOME TO YOUR VISIONBOARD</h3>
                <img src="<?= base_url()?>/assets/img/bottomline.png">
                <div id="exTab1" class="">
                   <ul class="nav nav-pills">
                      <li class="active">
                         <a href="#1a" data-toggle="tab">IDEAL</a>
                      </li>
                      <li>
                          <a href="#2a" data-toggle="tab">CURRENT</a>
                      </li>
                      <li>
                          <a href="#3a" data-toggle="tab">EXPENSE</a>
                      </li>
                      <li>
                          <a href="#4a" data-toggle="tab">TIMELINE</a>
                      </li>
                   </ul>
                   <div class="col-md-5">
                      <div class="circles">
                          <div>
                            <div>
                              <div>
                                <div>
                                  <!-- BEG Content -->
                                  Just text.
                                  <!-- END Content -->
                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                   </div>
                   <div class="col-md-5">
                      <div class="circles">
                          <div>
                            <div>
                              <div>
                                <div>
                                  <!-- BEG Content -->
                                  Just text.
                                  <!-- END Content -->
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                   </div>
                </div>
              </section>
           </div>
      <!-- </div> -->
       <!-- 
       <header class="main-header">
            <a href="<?=base_url()?>" class="logo">
               <span class="logo-mini"><b>A</b>P</span>
               <img class="img-responsive" src="<?=base_url()?>/assets/img/logo.jpg">
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">

                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 4 messages</li>
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                       <div class="pull-left">
                                          <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>
                                          Support Team
                                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                       </h4>
                                       <p>Why not buy a new awesome theme?</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                     </li>
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 10 notifications</li>
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer"><a href="#">View all</a></li>
                        </ul>
                     </li>
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="header">You have 9 tasks</li>
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#">
                                       <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                       </h3>
                                       <div class="progress xs">
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                             <span class="sr-only">20% Complete</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="footer">
                              <a href="#">View all tasks</a>
                           </li>
                        </ul>
                     </li>

                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <img src="<?php echo base_url()?>/assets/img/user.jpg" class="user-image" alt="User Image">
                           <span class="hidden-xs">
                              Administrator
                           </span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="user-header">
                              <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                              <p>
                                 Administrator
                              </p>
                           </li>

                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="<?php echo base_url()?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
      <div class="wrapper">
         <aside class="main-sidebar">
            <section class="sidebar">
               <div class="user-panel">
                  <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle profile" alt="User Image">
                  <div class="pull-left image">
                     <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p> Administrator</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                     </span>
                  </div>
               </form>
               <ul class="sidebar-menu">

                 <li class="header">HEADER</li>
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
                 </li>
                 <li class="treeview active">
                    <a href="#"><i class="fa fa-list"></i> <span>VISIONBOARD</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Entities</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Entities</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Events</a></li>
                    </ul>
                 </li>
                 <li class="treeview">
                    <a href="#"><i class="fa fa-list"></i> <span>VIRTUAL OFFICE</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-map"></i> Event Types (MAP)</a></li>
                       <li><a href="#"><i class="fa fa-list-ul"></i> Event Types (LIST)</a></li>
                       <li><a href="#"><i class="fa fa-database"></i> All Events</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Events</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Events</a></li>
                    </ul>
                 </li>
                 <li class="treeview">
                    <a href="#"><i class="fa fa-list"></i> <span>ADVISOR</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul>
                 </li>

                 <li class="treeview">
                    <a href="#"><i class="fa fa-list"></i> <span>KNOWLEDGE BANK</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
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
                    <a href="#"><i class="fa fa-list"></i> <span>EXPENSE TRACKER</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul>
                 </li>

                 <li class="treeview">
                    <a href="#"><i class="fa fa-list"></i> <span>TOOLS</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#"><i class="fa fa-database"></i> All Clubs</a></li>
                       <li><a href="#"><i class="fa fa-check"></i> Active Clubs</a></li>
                       <li><a href="#"><i class="fa fa-cut"></i> Disabled Clubs</a></li>
                    </ul>
                 </li>
              </ul>
            </section>
         </aside>
      </div> -->
<!-- <?php// include "includes/header.php"; ?> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php include "includes/footer.php"; ?>