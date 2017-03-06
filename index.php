﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style="font-family: SANS-SERIF">
    <head>
        <title>Alivio</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import materialize.css-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" href="css/mat_main.css" rel="stylesheet">
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>
    <body>

        <!--Navigation Pannel  -->
        <div class="row fullwidth navbar" >
          <nav>
              <div class="nav-wrapper black">
                  <!--Brand Logo -->
                  <a href="index.php" class="brand-logo" style="margin-left: 3%;">Alivio</a>
                  <!--Navigation button for mobile view -->
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                  <!--Navigattion Items for Website view-->
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <li><a href="Download.php">DOWNLOAD APP</a></li>
                      <li><a href="Help.php">HELP</a></li>
                      <li><a class="deep-orange waves-effect waves-light btn" style="background-color: #26a69a" href="#signin">Sign In</a></li>
                  </ul>
                  <!--Navigattion Items for Mobile view-->
                  <ul id="slide-out" class="side-nav black">
                      <div class="center"><a href="index.php"><h3 class="white-text">Alivio</h3></a></div>
                      <li><a href="Download.php" class="white black-text waves-effect waves-light btn" >DOWNLOAD APP</a></li>
                      <li><a class="waves-effect waves-light btn z-depth-5 deep-orange" href="#signin">Sign In</a></li>
                      <li><a class="waves-effect waves-light btn z-depth-5 deep-orange" href="signup.html">Sign Up</a></li>
                      <li><a href="Help.html" class="white-text center">HELP</a></li>
                  </ul>
              </div>
          </nav>
        </div><!--Navigation Pannel  END -->
        <!--Navigation Pannel Ends -->

        <!--Sign In modal window which is overlay on clicking signin-->
        <div id="signin" class="modal row s10">
          <div class="col s12">
            <form class="login-form">
              <div class="row fullwidth">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="email-s" type="email">
                  <label for="email-s">Email or Phone Number</label>
                </div>
              </div>
              <div class="row fullwidth">
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input id="password-s" type="password">
                  <label for="password-s">Password</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12">
                  <a href="" class="btn deep-orange waves-effect waves-light col s12">Sign In</a>
                </div>
                <div class="input-field col s12">
                  <p class="margin center medium-small sign-up ">Create an account? <a class="deep-orange-text" href="signup.html">Sign up</a></p>
                </div>
              </div>
            </form>
          </div>
        </div><!--Sign In modal window which is overlay on clicking signin END-->
        <!--Sign In modal window Ends-->

        <!--First Row  -->
        <div class="row Content">
          <!-- Cover Image  -->
          <div class="col l8 s12 fullwidth">
            <div class="center deep-orange-text row">
              <h2>" We Care for whom you care "</h2>
            </div>
            <div>
              <div class="cover-image">
                <img src="images/Slider1.jpg" width="100%">
              </div>
            </div>
          </div>

          <!-- Sign Up Pannel  -->
          <div class="col l4 s12 fullwidth signinpannel">
            <div id="login-page" class="row fullwidth">
              <!--Tabs  -->
              <div class="col s12 z-depth-4 card-panel fullwidth">
                <ul id="tabs-swipe-demo deep-orange" class="tabs" style="overflow-x: hidden;">
                    <li class="tab col s6"><a class="active deep-orange-text" href="#test-swipe-1">Sign Up to Assist</a></li>
                    <li class="tab col s6"><a class="deep-orange-text" href="#test-swipe-2">Sign Up get Help</a></li>
                </ul>
                <!-- First Tab -->
                <div id="test-swipe-1" class="col s12">
                  <form class="login-form">
                    <!--First Name and Last Name -->
                    <div class="row fullwidth">
                      <div class="input-field col s12 l6">
                        <i class="material-icons prefix">perm_identity</i>
                        <input id="firstname" type="text">
                        <label for="firstname">First Name</label>
                      </div>
                      <div class="input-field col s12 l6">
                        <i class="material-icons prefix">perm_identity</i>
                        <input id="lastname" type="text">
                        <label for="lastname">Last Name</label>
                      </div>
                    </div>
                    <!--Email Address -->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <!--Phone Number-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="phno" type="email">
                        <label for="phno">Phone Number</label>
                      </div>
                    </div>
                    <!--Password-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <!--City-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <input id="City" type="text">
                        <label for="City">City</label>
                      </div>
                    </div>
                    <!--Promocode-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">new_releases</i>
                        <input id="promo" type="text">
                        <label for="promo">Promo Code (Optional)</label>
                      </div>
                    </div>
                    <!--Terms and condition-->
                    <div class="row fullwidth" style="margin-bottom:1em">
                      <div class="input-field col s12">
                        <input type="checkbox" id="TC" />
                        <label class="labtc" for="TC">Agree Terms and Conditions</label>
                      </div>
                    </div>
                    <!--Sign Up Button-->
                    <div class="row margin-bottom">
                      <div class="input-field col s12 signupbutt">
                        <a href="index.php" class="btn deep-orange waves-effect waves-light col s12">Sign Up</a>
                      </div>
                      <div class="input-field col s12">
                        <p class="margin center medium-small sign-up ">Already have an account? <a class="deep-orange-text" href="signin.html">Sign In</a></p>
                      </div>
                    </div>

                  </form>
                </div>
                <!--First Tab END-->
                <!--Second Tab-->
                <div id="test-swipe-2" class="col s12">
                  <form class="login-form">
                    <!--User Name-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">perm_identity</i>
                        <input id="username-h" type="text">
                        <label for="username-h">Username</label>
                      </div>
                    </div>
                    <!--Phone Number-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="phno-h" type="email">
                        <label for="phno-h">Phone Number</label>
                      </div>
                    </div>
                    <!--Email-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email-h" type="email">
                        <label for="email-h">Email</label>
                      </div>
                    </div>
                    <!--Password-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password-h" type="password">
                        <label for="password-h">Password</label>
                      </div>
                    </div>
                    <!--City-->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <input id="City-h" type="text">
                        <label for="City-h">City</label>
                      </div>
                    </div>
                    <!--Promocode -->
                    <div class="row fullwidth">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">new_releases</i>
                        <input id="promo-h" type="text">
                        <label for="promo-h">Promo Code (Optional)</label>
                      </div>
                    </div>
                    <!--Terms and condition-->
                    <div class="row fullwidth" style="margin-bottom:1em">
                      <div class="input-field col s12">
                        <input type="checkbox" id="TC-h" />
                        <label class="labtc" for="TC-h">Agree Terms and Conditions</label>
                      </div>
                    </div>
                    <!--Sign Up Button-->
                    <div class="row margin-bottom">
                      <div class="input-field col s12 signupbutt">
                        <a href="index.php" class="btn deep-orange waves-effect waves-light col s12">Sign Up</a>
                      </div>
                      <div class="input-field col s12">
                        <p class="margin center medium-small sign-up ">Already have an account? <a class="deep-orange-text" href="signin.html">Sign In</a></p>
                      </div>
                    </div>
                  </form>
                </div>
                <!--Second Tab Ends-->
              </div>
              <!--Tabs Ends-->
            </div>
            <!--Second Tab Ends-->
          </div>
          <!--Sign Up Pannel Ends-->
        </div>
        <!--First Row Ends-->

        <div class="row container Content" style="width:100%">
          <h2 class="deep-orange-text center">What is Alivio?</h2>
          <div class="col s12 l6 push-l3 black-text medium" style="text-align: justify;">
            <h5>Alivio is a care giving company. We provide services to elderly people with human touch.In this busy world elderly people are
              facing lots and lots of problems. They feel lonely and helpless at home. We are here with a solution that can help to connect
              elderly people with person living near to them who can help them out with some service and can also earn some money out of it.
            </h5>
          </div>
        </div>


        <!--Second Row  -->
        <div class="row container Content" style="width:100%">
          <!--Bday card -->
          <h2 class="deep-orange-text center">Our Services</h2>
          <div class="col s12 l3">
            <div class="card">
              <div class="card-image">
                <img class="responsive-img" style="height: 14em;" src="images/Bday.jpg">
                <a class="btn-floating halfway-fab waves-effect waves-light deep-orange"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title deep-orange-text">Wish a Birthday</span>
                <p>Wish your parents a birthday day by ordering a cake and have a Video call with them.</p>
              </div>
            </div>
          </div>
          <!--Bday card Ends  -->
          <!--Physical Assitant Card  -->
          <div class="col s12 l3">
            <div class="card" style="height:100%!important;">
              <div class="card-image">
                <img class="responsive-img" style="height: 14em;" src="images/Help.jpg">
                <a class="btn-floating halfway-fab waves-effect waves-light deep-orange"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title deep-orange-text">Get Physical Assistant</span>
                <p>Provide some physical support to your parents.</br></p></br>
              </div>
            </div>
          </div>
          <!--Physical Assitant Card Ends -->
          <!--Mental Assitant Card  -->
          <div class="col s12 l3">
            <div class="card">
              <div class="card-image">
                <img class="responsive-img" style="height: 14em;" src="images/Guitar.jpg">
                <a class="btn-floating halfway-fab waves-effect waves-light deep-orange"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title deep-orange-text">Get Mental Assistant</span>
                <p>Provide someone to talk to your parents and entertain them.</p></br>
              </div>
            </div>
          </div>
          <!--Mental Assitant Card End -->
          <!--Technical Assitant Card  -->
          <div class="col s12 l3">
            <div class="card">
              <div class="card-image">
                <img class="responsive-img" style="height: 14em;" src="images/Tech.jpg">
                <a class="btn-floating halfway-fab waves-effect waves-light deep-orange"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <span class="card-title deep-orange-text">Get Technical Assistant</span>
                <p>Provide technical support to your parents.</p></br>
              </div>
            </div>
          </div>
          <!--Technical Assitant Card  Ends-->
        </div>
        <!--Second Row Ends -->


        <!--Third Row -->
        <div class="row Content Slider-sec" style="width:100%;">
          <h2 class="deep-orange-text center">Our Community<h2>
          <div class="next" id="prev">
            <i class="material-icons white-text">skip_previous</i>
          </div>
          <div class="prev" id="next">
            <i class="material-icons white-text">skip_next</i>
          </div>
          <div class="slider" style="z-index: -1;">
            <ul class="slides" style="height:500px!important">
              <li>
                <img class="responsive-img" src="images/Slider11.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3 class="deep-orange-text">This is our big Tagline!</h3>
                  <h5 class="light deep-orange-text text-lighten-1">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img class="responsive-img" src="images/Slider2.jpg"> <!-- random image -->
                <div class="caption left-align">
                  <h3 class="deep-orange-text">Left Aligned Caption</h3>
                  <h5 class="light deep-orange-text text-lighten-1">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img class="responsive-img" src="images/Slider3.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3 class="deep-orange-text">Right Aligned Caption</h3>
                  <h5 class="light deep-orange-text text-lighten-1">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img class="responsive-img" src="images/Slider4.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3 class="deep-orange-text">This is our big Tagline!</h3>
                  <h5 class="light deep-orange-text text-lighten-1">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--Third Row Ends-->

        <!--contact us-->
        <div class="row Content container" style="width:100%;margin-top:7em;" >
          <h2 class="deep-orange-text center">Meet the Team</h2>
          <div class="col s6 l3 center">
            <div class="row our-team-img circle">
              <img class="circle" src="images/Garvit.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Smit Kadvani</h5>
              <h6>CO-FOUNDER & <br>ENGINEER</h6>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/garvitpatel196" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="our-team-img row">
              <img class="circle" src="images/Garvit.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Garvit Patel</h5>
              <h6>CO-FOUNDER, DESIGNER & PROJECT MANAGER</h6>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/garvitpatel196" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="our-team-img row">
              <img class="circle" src="images/DhruvanTanna.JPG">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Dhruvan Tanna</h5>
              <h6>CO-FOUNDER, SENIOR ENGINEER</h6></br>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/garvitpatel196" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="row our-team-img">
              <img class="circle" src="images/Harsh Karangia.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Harsh Karangia</h5>
              <h6>MARKETING DIRECTOR & CO-FOUNDER</h6></br>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/harsh.karangia" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/harsh-karangia-0092a7118" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="row our-team-img">
              <img class="circle" src="images/Jaypal Singh.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Jaypal singh</h5>
              <h6>MARKET RESEARCH ANALYST & CO-FOUNDER</h6></br>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/garvitpatel196" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="row our-team-img">
              <img class="circle" src="images/Priyansh Shah.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Priyansh Shah</h5>
              <h6>SALES MANAGER & CO-FOUNDER</h6></br>
              <div class="footer">
                <a href="https://twitter.com/Priyansh_Shah56" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/priyansh.shah.507?ref=bookmarks" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/priyansh-shah-889b7a139" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col s6 l3 center">
            <div class="row our-team-img">
              <img class="circle" src="images/Garvit.jpg">
            </div>
            <div class="row">
              <h5 class="deep-orange-text">Maitrik Patel</h5>
              <h6>MENTOR/ADVISOR</h6></br>
              <div class="footer">
                <a href="https://twitter.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                <a href="https://www.facebook.com/garvitpatel196" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://in.linkedin.com/in/garvitpatel196" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--Contact US ENDs -->
        <!--Footer -->
        <footer class="page-footer Content black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Alivio</h5>
                <p class="grey-text text-lighten-4">"We care for whom you care".</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <ul>
                  <li><a class="white-text" href="#!">Report Error</a></li>
                  <li><a class="white-text" href="#!">About Us</a></li>
                  <li><a class="white-text" href="#!">Cities</a></li>
                  <li><a class="white-text" href="#!">How it Works</a></li>
                  <li><a class="white-text" href="#!">Help</a></li>
                  <li><a class="white-text" href="#!">Fare Estimation</a></li>
                  <li><a class="white-text" href="#!">Careers</a></li>
                  <li><a class="white-text" href="#!">Safety</a></li>
                  <li><a class="white-text" href="#!">Our Story</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Â© 2017 Copyright Alivio Inc
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>
        <!--Footer Ends-->
      <script>
        $('#next').click(function(){
          $('.slider').slider('next');
        });
        $('#prev').click(function(){
          $('.slider').slider('prev');
        });
        $(document).ready(function(){
          $('.slider').slider();
          $('.parallax').parallax();
        });
        $(window).resize(function(){

          if ($(window).width() <= 993)
          {
            $(".signinpannel").hide();
          }
          else{
            $(".signinpannel").show();
          }
        });
        $(document).ready(function(){
          if ($(window).width() <= 993)
          {
            $(".signinpannel").hide();
          }
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
            //$(".modal").style("top","15%")
        });
        $(".button-collapse").sideNav();
        $('.collapsible').collapsible();
        $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
      </script>
    </body>
</html>
