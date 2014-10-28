        <style>
            body {
                padding-top: 0px;
                padding-bottom: 10px;
                background-image: url('/img/NavyBlueCamo.png');
            }
        </style>
        <!--link rel="stylesheet" type="text/css" href="/subtrees/bootstrap/dist/css/bootstrap.min.css"-->
        <link rel="stylesheet" type="text/css" href="/style/combined.main.min.css">


        <?php
            /*
                The <title> and description tags are set in betweeen the upper header and lower header include statements
            */

            //Figures out what page your on for the top bar menu
            // gets the current URI, remove the left / and then everything after the / on the right
            $directory = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

            // loop through each directory, check against the known directories, and add class   
            $directories = array("", "about","contact","media","calendar"); // "" is the homepage sense we are using clean URL's
            foreach ($directories as $folder){
                $active[$folder] = ($directory[0] == $folder)? "active":"";
            }


            /*This will be for automatically turning off fancybox for mobile
            $fancybox_types = array("various", "about","contact","media","calendar");
            foreach ($fancybox_types as $folder){
                $active[$folder] = ($directory[0] == $folder)? "active":"";
            }
            */
            
        ?>
       
    </head>
    <body>


        <!--Begin Facebook SDK-->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!--END Facebook SDK-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <!--<img alt="All Team members" class="headerimage" src="/img/Big_Header.JPG" width="1271px" />-->
            <div class="container">
                <div class="navbar-header">
                    <!--Start of Mobile Only Buttons-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                    <!--End of Mobile Only Buttons-->
                    <a class="navbar-brand" href="/"><strong>Top Gun Robotics</strong></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--About Section Goes Here-->
                        <li class="dropdown <?php echo $active['media']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-picture"></span> Media <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://youtube.com/user/TopGun1294/"><i class="fa fa-youtube-play"></i> Videos</a></li>
                                <li><a href="http://www.gallery.team1294.org/"><span class="glyphicon glyphicon-picture"></span> Pictures</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $active['calendar']?>"><a href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                        <li class="<?php echo $active['contact']?>"><a href="/contact/"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>                        
                    </ul>
                    <div class="addthis_horizontal_follow_toolbox social-media-icons navbar-right"></div>
                    <!--<ul class="nav navbar-right">
                        <li><a id="donate-btn" href="/portal" class="btn btn-success navbar-btn">Portal</a></li>
                    </ul>
                    -->
                </div>
            </div>
        </nav>
        
        <div>
        <!--[if lte IE 8]>
        <div class="alert alert-warning popup">
                <h4>Warning!</h4>
                <p class="chromeframe">You are using a <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser to one that supports current web standards</a> <span class="Google-Chrome-Frame-Hint">*cough*</span><a class="alert-link" href="https://www.google.com/intl/en/chrome/browser/"/>Google Chrome</a><span class="Google-Chrome-Frame-Hint">*cough*</span> to improve your experience with the internet as a whole</p>
        </div>
        <![endif]-->
        </div>

    
 