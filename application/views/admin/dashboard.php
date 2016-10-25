<?php include "includes/header.php"; ?>
<div class="content-wrapper">
   <section class="content-header">
      <!-- <b> -->
         <h1>Good Morning, Smitesh</h1>
      <!-- </b> -->
      <h3 class="light">WELCOME TO YOUR VISIONBOARD</h3>
      <img src="<?= base_url()?>/assets/img/bottomline.png">
   </section>
   <section class="content">
      <?php
         if(isset($output)){
             echo $output;
         }
         ?>
      <div id="exTab1" class="container">
         <ul  class="nav nav-pills">
            <li class="active">
               <a  href="#1a" data-toggle="tab">IDEAL</a>
            </li>
            <li><a href="#2a" data-toggle="tab">CURRENT</a>
            </li>
            <li><a href="#3a" data-toggle="tab">EXPENSE</a>
            </li>
            <li><a href="#4a" data-toggle="tab">TIMELINE</a>
            </li>
         </ul>
         <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
               <div class="row">
                  <br>
                  <p class="center font18 monitor">Invest with a goal in mind so that you <b> NEVER LOOSE INTREST</b> Here’s your ideal portfolio based on your conservative risk quotient.</p>
                  <div class="col-md-6 center">

                     <!--  <div id="canvas-holder" style="width:100%">
                          <canvas id="chart-area"  width="300" height="300" />
                      </div> -->

                      <div id="idealtab" style="width: 600px; height: 400px; margin: 0 auto"></div>
                      <br>

                      <p><b>Edit Your Portfolio</b></p>
                  </div>
                  <div class="col-md-6 text-right white">
                      <br>
<!--                       <input id="ex13" type="text" data-slider-ticks="[0, 1, 2]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESIVE"]'/> -->

                      
                    <input class="text-orange" id="ex13" type="text" data-slider-ticks="[0, 200, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESSIVE"]'/>


                      <button class="btn color-red"><b>DEBT - Rs 2,00,000</b></button>
                      <button class="btn color-green"><b>GOLD - Rs 2,00,000</b></button>
                      <button class="btn color-maroon"><b>ALT. INVST - Rs 2,00,000</b></button>
                      <button class="btn color-darkgreen"><b>EQUITY - Rs 2,00,000</b></button>
                      <button class="btn color-yellow"><b>REAL ESTATE - Rs 2,00,000</b></button>
                      <button class="btn color-orange"><b>INSURANCE - Rs 2,00,000</b></button>

                  </div>
               </div>
            </div>
            <div class="tab-pane" id="2a">


              <div class="row">
                  <br>
                  <p class="center font18 monitor">Monitor your current portfolio to <b>NEVER LOOSE INTREST</b> Get a macro view of your investments.</p>
                  <div class="col-md-6 center">

                      <!-- <div id="canvas-holder1" style="width:100%">
                          <canvas id="chart-area1" />
                      </div> -->

                      <div id="currenttab" style="width: 600px; height: 400px; margin: 0 auto"></div>
                      <br>

                      <p><b>Edit Your Portfolio</b></p>
                  </div>

                  <div class="col-md-6 text-right white">
                      <br>
<!--                       <input id="ex13" type="text" data-slider-ticks="[0, 1, 2]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESIVE"]'/> -->

                      
                    <input class="" id="ex14" type="text" data-slider-ticks="[0, 200, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESSIVE"]'/>


                      <button class="btn color-red"><b>DEBT - Rs 2,00,000</b></button>
                      <button class="btn color-green"><b>GOLD - Rs 2,00,000</b></button>
                      <button class="btn color-maroon"><b>ALT. INVST - Rs 2,00,000</b></button>
                      <button class="btn color-darkgreen"><b>EQUITY - Rs 2,00,000</b></button>
                      <button class="btn color-yellow"><b>REAL ESTATE - Rs 2,00,000</b></button>
                      <button class="btn color-orange"><b>INSURANCE - Rs 2,00,000</b></button>

                  </div>
               </div>
              
            </div>
            <div class="tab-pane" id="3a">
                <!-- <div id="canvas-holder2" style="width:100%;">
                    <canvas id="chart2"/>
                </div> -->
                <!-- <div id="expensestab" style="height: 400px; margin: auto; min-width: 310px; max-width: 600px"></div> -->
                <div class="row">
                  <!-- <div class="col-md-12"> -->
                      <br>
                      <p class="center font18 monitor">Make sure your money works for you so that you <b> NEVER LOOSE INTREST</b> Keep a track your daily expenses.</p>
                      <div style="width:70%" id="expensestab"></div>
                  <!-- </div> -->
                </div>
                <br>
                <div class="row center">
                  <div class="col-md-4">
                      <input type="submit" value="VIEW ALL" class="cust-btn">
                  </div>
                  <div class="col-md-4">
                      <!-- <input type="submit" value="VIEW ALL"> -->
                      <h3 class="no-mar"><b>BALANCE</b></h3>
                      <h3 class="no-mar"><b>Rs 42567</b></h3>
                  </div>
                  <div class="col-md-4">
                      <input type="submit" value="ADD EXPENSES" class="cust-btn">
                  </div>
                </div>

            </div>
            <div class="tab-pane" id="4a">

                <div class="row">
                      <br>
                      <p class="center font18 monitor">When you plan for success, you  <b> NEVER LOOSE INTREST</b>View future projections of your goals, incomes and expenses.</p>

                      <div class="row mar-bot-3per">
                        <div class="col-md-4">INCOME:- <input type="text" class="cust_text"></div>
                        <div class="col-md-4">INCREMENT:- <input type="text" class="cust_text"></div>
                        <div class="col-md-4">GO TO:- <input type="text" class="cust_text"></div>
                      </div>

                      <div class="row mar-bot-3per">
                        <div class="col-md-6">EXPENSES:- <input type="text" class="cust_text"></div>
                        <div class="col-md-6">INFLATION:- <input type="text" class="cust_text"></div>
                      </div>


                </div>

            </div>
         </div>
      </div>
      <br>
      <div class="box">
         <h1 class="center">FINANCIAL ADVICE</h1>
         <p class="center font18">The AssetPie financial marketplace has many certified advisors who can help you with your investments. So speak to one today!</p>

         <br>

         <div class="row">
            <div class="col-md-6">

               <div class="radius50 color-orange">

                  <div class="best-advisor-inner">
                     <h2><b>BEST ADVISOR</b></h2>
                     <select class="cust-dropdown">
                        <option>FINANCIAL ADVISOR</option>
                     </select>

                  </div>

                  <div id="owl-demo" class="owl-carousel owl-theme">

                      <div class="item">
                          <img src="<?= base_url()?>assets/img/user.jpg" alt="Chania" class="profile left">
                          <div class="left white">
                            <h3 style="font-weight: 600; margin:0;">SMITESH WANI,<br> CFP</h3>
                            <p style="font-weight: 600;">Cool Advisor</p>
                          </div>
                      </div>
                      <div class="item">
                        <img src="<?= base_url()?>assets/img/user.jpg" alt="Chania" class="profile left">
                          <div class="left white">
                            <h3 style="font-weight: 600; margin:0;">SMITESH WANI,<br> CFP</h3>
                            <p style="font-weight: 600;">Cool Advisor</p>
                          </div>
                      </div>
                      <div class="item">
                        <img src="<?= base_url()?>assets/img/user.jpg" alt="Chania" class="profile left">
                          <div class="left white">
                            <h3 style="font-weight: 600; margin:0;">SMITESH WANI,<br> CFP</h3>
                            <p style="font-weight: 600;">Cool Advisor</p>
                          </div>
                      </div>
                  </div>


                  <div class="small-circle color-lightred">
                     <h4 class="small-circle-inner"><b>CONNECT</b></h4>
                  </div>

               </div>

            </div>

            <div class="col-md-6">

               <div class="radius50 color-red">

                  <div class="choose-advisor-inner">
                     <h2><b>CHOOSE AN ADVISOR</b></h2>
                     <p class="pick">Pick an advisor of your choice from the AssetPie marketplace.</p>
                  </div>

                  <div id="owl-demo1" class="owl-carousel owl-theme" style="padding:5%">
                      <div class="item">
                          <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon1.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon2.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon3.png" class="img-responsive">
                            </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon1.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon2.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon3.png" class="img-responsive">
                            </div>
                          </div>
                      </div>
                       <div class="item">
                          <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon1.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon2.png" class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url()?>/assets/img/icon3.png" class="img-responsive">
                            </div>
                          </div>
                      </div>
                  </div>


                  <div class="small-circle color-lightorange right0">
                     <h4 class="small-circle-inner"><b>VIEW ALL</b></h4>
                  </div>
               </div>

            </div>


         </div>
      </div>
      <div class="box">
         <h1 class="center">DEALS AT ASSETPIE</h1>
         <br>
         <p class="center font18">Exclusively curated for you. <br> You’ll find these interesting deals only on the AssetPie marketplace.</p>
         <br>



         <div class="row center">

            <div class="col-md-1"></div>
           <div class="col-md-5" style="position:relative">
              <div class="deal">
                  <img src="<?= base_url()?>/assets/img/tata.png" alt="Chania" class="circle-deal-left">
                  <h3 class="tataheading"><b>TATA HOUSING</b></h3>
                  <p class="tatainnertext">Invest 1 cr in an upcoming  commercial space by Tata Housing and get 18% on your investment This Mezzanine deal is exclusively curated for you.</p>
                  <p class="tatafooter">18% INTREST GAURANTEED</p>
              </div>

              <div class="left-deal-small-circle color-lightred">
                 <h4 class="small-circle-inner"><b>CONNECT</b></h4>
              </div>


           </div>
           <div class="col-md-5">
              <div class="deal">

                 <img src="<?= base_url()?>/assets/img/lodha.png" alt="Chania" class="circle-deal-right">
                    <h3 class="lodhaheading"><b>LODHA REALITY</b></h3>
                    <p class="lodhainnertext">Invest 1 cr in an upcoming commercial space by Lodha  Realty and get 18% return on your investment. This Mezzanine deal is exclusively curated for you.</p>
                    <p class="lodhafooter">18% INTREST GAURANTEED</p>

              </div>

               <div class="right-deal-small-circle color-lightred">
                 <h4 class="small-circle-inner"><b>CONNECT</b></h4>
              </div>

           </div>

            <div class="col-md-1"></div>

        </div>

          <input style="margin:2% 40%" class="view-all" type="submit" name="" value="VIEW ALL">
      </div>
     <div class="box">
         <h1 class="center">CONNECT</h1>
         <p class="center font18">The AssetPie virtual office helps you connect with your advisor with ease. </p>
         <div class="row">
            <div class="col-md-6">
               <div class="radius50 color-lightred">
                  <div class="recent-calls-inner">
                     <h2><b>RECENT CALLS</b></h2>
                  </div>

                  <div id="owl-demo2" class="owl-carousel owl-theme text-center" style="padding:5%;">
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="small-circle color-lightorange">
                     <h4 class="small-circle-inner"><b>VIEW ALL</b></h4>
                  </div>

               </div>
            </div>
            <div class="col-md-6">
               <div class="radius50 color-yellow">
                  <div class="your-advisor-inner">
                     <h2><b>YOUR ADVISORS</b></h2>
                  </div>
                   <div id="owl-demo3" class="owl-carousel owl-theme text-center" style="padding:5%">
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="row"> 
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                              <div class="col-md-6 user-name">
                                  <img src="<?= base_url()?>/assets/img/user.jpg" alt="Chania" class="profile">
                                  <p><b>Smitesh Wani</b></p>
                                  <p style="margin:0">Yeaterday 9:10pm</p>
                                  <p><input class="call-btn" type="submit" name="" value="call"></p>
                                  
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="small-circle color-lightred right0">
                     <h4 class="small-circle-inner"><b>VIEW ALL</b></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-8">
               <div class="radius50 color-maroon">
                  <div class="invite-advisor-inner">
                     <h2><b>INVITE ADVISOR</b></h2>
                      <br>
                      <p><b>Name :</b><input class="invite-input" type="text" name=""></p>
                      <p><b>Email-id :</b><input class="invite-input" type="text" name=""></p>
                      <p><b>Phone Number :</b><input class="invite-input" type="text" name=""></p>
                  </div>

                  <div class="small-circle color-lightmaroon">
                     <h4 class="small-circle-inner"><b>INVITE</b></h4>
                  </div>
               </div>
            </div>
            <div class="col-md-2">
            </div>
         </div>
      </div>

      <div class="box">
         <h1 class="center">KNOWLEDGE BANK</h1>
         <p class="center font18 know-pad">It pays to arm yourself with financial knowledge. You can keep an eye on the markets, get skilled or just be well informed.</p>
         <div class="row">
            <div class="col-md-6">
               <div class="radius50 color-offwhite">
                  <!-- circle-slider -->
                  <!-- <img src="http://www.w3schools.com/bootstrap/img_chania.jpg" alt="Chania" class=""> -->
                  <div class="best-advisor-inner">
                     <h2 class="textblack"><b>INDICES</b></h2>

                     <input class="search-input" type="text" placeholder="Search" name="">

                     <div class="sensex-box">
                         <p class="no-mar">SENSEX</p>
                         <div style="display:flex">
                            <h3 class="no-mar">28,294.20 </h3><h4 class="child-sensex fontred">37394.33(1.30%)</h4> 
                         </div>
                         

                         <p class="no-mar">NIFTY</p>
                         <div style="display:flex">
                            <h3 class="no-mar">28,294.20 </h3><h4 class="child-sensex fontgreen">37394.33(1.30%)</h4> 
                         </div>
                     </div>
                     
                  </div>
                  <div class="small-circle color-lightblack ">
                     <h4 class="small-circle-inner"><b>VIEW ALL</b></h4>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="radius50 color-orange">
                  <div class="small-circle color-lightred upleft0">
                     <h4 class="small-circle-inner training-mar-top"><b>GET TRAINED</b></h4>
                  </div>
                  <div class="training-inner">
                     <h2><b>TRAINING</b></h2>

                     <p class="pad5per font18">Webinars and articles by experts in their field. Take the one you need.</p>
                  </div>
                  <div class="small-circle color-lightred right0">
                     <h4 class="small-circle-inner"><b>TRAIN</b></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="row" style="position: relative;top: -40px;">
            <div class="col-md-1">
            </div>
            <div class="col-md-11" style="position:relative">
               <div class="radius50 color-yellow">

                  <div class="your-advisor-inner">
                     <h2><b>EXPERT SPEAK</b></h2>

                  </div>


                  <div id="owl-demo4" class="owl-carousel owl-theme" style="padding:5%">
                      <div class="item">
                          <p class="pad5per font18 white">An interesting article about Finance and Wealth Management.</p>
                      </div>
                      <div class="item">
                            <p class="pad5per font18 white">An interesting article about Finance and Wealth Management.</p>
                      </div>
                      <div class="item">
                      <p class="pad5per font18 white">An interesting article about Finance and Wealth Management.</p>
                      </div>
                  </div>

                  <div class="small-circle color-lightred right0">
                     <h4 class="small-circle-inner"><b>VIEW ALL</b></h4>
                  </div>
               </div>

               <div class="expert-div">

                <br>
                  <p>Pratheek Rao | Monday, September 26 2016</p>
                  <p class="font18">Law principles themselves ten are possession. So endeavor  to continue cheerful doubtful we to. Turned advice the set vanity why mutual. So endeavor  to continue cheerful doubtful we to.
Read more...</p>


               </div>

            </div>
         </div>


      </div>
      <div class="box">
         <h1 class="center">OUR AFFILIATES</h1>


          <div class="row">
            <div class="col-md-4">
              <div class="add-space">
                  <h2 class="pad60"><b>AD SPACE</b></h2>
               </div>
            </div>
            <div class="col-md-4">
              <div class="add-space">
                  <h2 class="pad60"><b>AD SPACE</b></h2>
               </div>
            </div>
            <div class="col-md-4">
              <div class="add-space">
                  <h2 class="pad60"><b>AD SPACE</b></h2>
               </div>
            </div>
          </div>         
         <!-- <div class="row">
            <div class="col-md-4">
               <div class="ad-space">
                  <h1 class="pad60 white">AD SPACE</h1>
               </div>
            </div>
            <div class="col-md-4">
               <div class="ad-space">
                  <h1 class="pad60 white">AD SPACE</h1>
               </div>
            </div>
            <div class="col-md-4">
               <div class="ad-space">
                  <h1 class="pad60 white">AD SPACE</h1>
               </div>
            </div>
         </div> -->
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
<!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
   </section>
</div>
<?php include "includes/footer.php"; ?>