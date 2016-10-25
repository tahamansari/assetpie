<!--          <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <strong>Developed By <a href="http://kreaserv.com/">KREASERV</a>.</strong> As Technical Partners.
            </div>
            <strong>Copyright &copy; 2016 <a href="http://mumbaiparties.com/">MUMBAI PARTIES</a>.</strong> All rights reserved.
         </footer> -->
         <aside class="control-sidebar control-sidebar-dark">
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
               <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
               <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="control-sidebar-home-tab">
                  <h3 class="control-sidebar-heading">Recent Activity</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript::;">
                           <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                              <p>Will be 23 on April 24th</p>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <h3 class="control-sidebar-heading">Tasks Progress</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript::;">
                           <h4 class="control-sidebar-subheading">
                              Custom Template Design
                              <span class="pull-right-container">
                              <span class="label label-danger pull-right">70%</span>
                              </span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
               <div class="tab-pane" id="control-sidebar-settings-tab">
                  <form method="post">
                     <h3 class="control-sidebar-heading">General Settings</h3>
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                           Some information about this general settings option
                        </p>
                     </div>
                  </form>
               </div>
            </div>
         </aside>
         <div class="control-sidebar-bg"></div>
      </div>

      <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
      <script src="<?php echo base_url();?>assets/js/app.min.js"></script>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="http://code.highcharts.com/highcharts-more.js"></script>

      

<!--      <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap-slider.js"></script>-->

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.2/bootstrap-slider.js"></script>

      
      <script src="<?php echo base_url();?>assets/js/cust_script.js"></script>

      <?php 
         if(isset($js_files)){
            foreach($js_files as $files){ ?>
               <script src="<?php echo $files; ?>"></script>
      <?php  }
         }
      ?>
   </body>
</html>