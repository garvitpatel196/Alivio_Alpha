<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style="font-family: SANS-SERIF">
    <head>
        <title>Alivio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import materialize.css-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" href="css/main.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
         <!--Let browser know website is optimized for mobile-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="845302857444-g4ouund8qqp0hj347tjdvis1672emprr.apps.googleusercontent.com">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>
    <body>
        <!--Navigation Bar -->
        <div class="navbar-fixed" style='z-index:1!important;'>
            <nav>
                <div class="nav-wrapper  red accent-2">
                    <!--Brand Logo -->
                    <a href="index.html" class="brand-logo" style="margin-left: 3%;">Alivio</a>
                    <!--Navigation button for mobile view -->
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                    <!--Navigattion Items for Website view-->
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html">DOWNLOAD APP</a></li>
                        <li><a href="badges.html">HELP</a></li>
                        <li><a class="waves-effect waves-light btn" style="background-color: #26a69a" href="#signin">Sign In</a></li>
                    </ul>
                    <!--Navigattion Items for Mobile view-->
                    <ul id="slide-out" class="side-nav">
                        <li><a href="sass.html" >DOWNLOAD APP</a></li>
                        <li><a href="badges.html">HELP</a></li>
                        <li><div class="divider"></div></li>
                        <li><a class="waves-effect waves-light btn z-depth-5" style="background-color: #26a69a" href="#signin">Sign In</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--Sign In modal window which is overlay on clicking signin-->
        <div id="signin" class="modal">
            <div class="modal-content">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col s12">
                                <a class="waves-effect waves-light btn-large center">Sign In</a>
                            </div>
                        </div>
                        <!--Google Sign in-->
                        <div class="row center" style="margin-top:5px">
<!--
                            <div class="col s12">
                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            </div>
-->
                            <div class="col s12" >
                                <a class="waves-effect waves-light btn-large center">Sign in with Google</a>
                            </div>
                        </div>
                        <!--Facebook Sign IN-->
                        <div class="row center" style="margin-top:5px">
                            <div class="col s12">
                                <a class="waves-effect waves-light btn-large center">Sign in with Facebook</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="wrapper" style="z-index:0;">
            <!--Heading of Website -->
            <div class="row heading responsive-img">
                <h1>Alivio</h1>
                <p style="font-size: x-large;">" We care for whom you care "</p>
                <ul class="actions">
                    <li><a href="#signin" class="btn">Sign In</a></li>
                    <li><a href="#" class="btn  teal lighten-3">Sign Up</a></li>
                </ul>
            </div>
            <!--Reasons to book service -->
            <div class="row" style="margin-top:1em!important;">
                <div class="row">
                    <div class="col l4 acard">
                        <div class="acard-icon row">
                            <img src="Tap.jpg" alt="Tap" style="width:200px;height:200px;">
                        </div>
                        <div class="row">
                                <h4 style="text-align:center!important">Easiest way around</h4>
                                <h5>Just one tap and a helping hand will be there for your loved ones. Hop in—sevice provider will know what to do and how to help. And as soon as you are satisfied he will pull out with a smiling face. Payment is completely seamless.</h5>
                        </div>
                    </div>
                    <div class="col l4 acard">
                        <div class="acard-icon row">
                            <img src="location_black.png" alt="Location" style="width:200px;height:200px;">
                        </div>
                        <div class="row">
                            <h4 style="text-align:center!important">Anywhere, anytime</h4>
                            <h5>Daily Help. Errand across town. Celebrations with loved ones. Technical help. Whatever you need, count on Alivio for a service—no reservations required.</h5>
                        </div>
                    </div>
                    <div class="col l4 acard">
                        <div class="acard-icon row">
                            <img src="20687.png" alt="Location" style="width:200px;height:200px;">
                        </div>
                         <div class="row">
                            <h4 style="text-align:center!important">Low-cost to luxury</h4>
                            <h5>Day to day help service at very low prices are always available. For special occasions, no occasion at all, or when you are feeling lonely just call a person near you who can spend time and make your day.</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l4">
                        <a class="btn-large waves-effect waves-light" href="#" style="z-index:0">Reasons to get service
                            <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:20px"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row ourcom">
              <div>
                <div class="row" style="padding:1em 1em 1em 1em">
                    <div class="col l6 s6 offset-l6 acard" style="z-index:0">
                        <h4>Our community</h4>
                        <h5>Economy cars at everyday prices are always available. For special occasions, no occasion at all, or when you just a need a bit more room, call a black car or SUV.</h5>
                    </div>
                </div>
                <div class="row" style="padding:1em 10em 10em 10em">
                    <div class="col l5 offset-l7 acard" style="z-index:0">
                        <a class="btn-large waves-effect waves-light" href="#" style="z-index:0">Read Stories
                            <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:20px"></i>
                        </a>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

            </div>
        </div>
        <script>

            $(document).ready(function(){
                    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
                //$(".modal").style("top","15%")
            });
            function onSignIn(googleUser) {
              var profile = googleUser.getBasicProfile();
              console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
              console.log('Name: ' + profile.getName());
              console.log('Image URL: ' + profile.getImageUrl());
              console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            }
        </script>
        <script>
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
