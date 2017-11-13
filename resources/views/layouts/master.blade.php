<!DOCTYPE html>
<html>
    <head>
        <title>kojekude</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
        <link rel="icon" href="images/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/app.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/kojekude.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="lightbox/lytebox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/Reset.css" type="text/css" media="screen" />
        <script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="lightbox/lytebox.js"></script>
        <script src="js/jquery.slides.js"></script>
        <script src="js/kojekude.js"></script>
    </head>

    <body onload=";init_start(); " id="bodytag" class="bodyContent" oncontextmenu="return false;" >
        <div class="container-fluid" id="header-container"><!-- Header container -->
            <header class="container">
            
                    <div id="jezik">
                        <a href="#">SRB</a>
                        <a href="#" style="background-color: #F5F5F5;color:#F05523;">ENG</a>
                    </div>
               
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="logo">
                        <a class="logo" href="index.php">
                            <img src="images/LOGO.png" alt="logo"/>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="navbar-header" >
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         </button>
                      </div>
                      <div class="collapse navbar-collapse " id="menu">
                         <ul class="nav navbar-nav">
                            <li><a href="index.php" >HOME</a>
                            <li><a href="about/">ABOUT</a></li>
                            <li><a href="portfolio/">PORTFOLIO</a></li>
                            <li><a href="contact/">CONTACT</a></li>
                            </ul>
                         </div>
                    </nav>
      
                    </div>
                </div>
            </header>
        </div>

        <div id="big1" class="big23"></div>
        <div class="container">
        <table id="social-icons"  class="container">
            <tr>
                <td>
                    <a href="https://www.behance.net/Kojekude" target="_blanc" >
                    <input id="behance2" type="image" src="images/social_icons/be-sivo.png" alt="behance"/>
                    </a>
                    <a href="https://plus.google.com/u/0/108412693447363827719/posts" target="_blanc" ><input id="google2" type="image" src="images/social_icons/g-sivo.png" alt="google"/>
                    </a>
                    <a href="http://www.linkedin.com/profile/view?id=297391446&trk=nav_responsive_tab_profile" target="_blanc" >
                    <input id="in2" type="image" src="images/social_icons/in-sivo.png" alt="in"/>
                    </a>
                    <a href="https://www.elance.com/s/edit/kojekude_studio/" target="_blanc" >
                    <input id="elance2" type="image" src="images/social_icons/e-sivo.png" alt="elance"/>
                    </a>
                    <a href="https://twitter.com/kojekude_studio" target="_blanc" >
                    <input id="twiter2" type="image" src="images/social_icons/t-sivo.png" alt="twiter"/>
                    </a>
                    <a href="https://www.facebook.com/pages/Kojekude/276273489198305" target="_blanc" >
                    <input id="face2" type="image" src="images/social_icons/f-sivo.png" alt="face"/>
                    </a>
                </td>
            </tr>
        </table>
</div>

         @yield('content')

<div class="container-default">
    <footer>
        <div class="row">
            <div id="avatar">
                <a href="index.php">
                    <img src="images/avatar.png" alt="avatar" style="display: block;margin-right: auto; margin-left: auto;" />
                </a>
                <img src="images/logo_futer.png" style="width: 175px;margin-left:auto;margin-right: auto;position: relative" alt="logo"/>
                <a href="contact.php">
                    <p class="kancelarija">
                    office@kojekude.com
                    </p>
                </a>
                <p class="info-futera">
                +381 64 2017 553
                </p>
            </div>
        </div>
        <div class="container" id='footer-social'>
            <table id="projectby"  class="content">
                <tr>
                    <td>
                        <a href="https://www.behance.net/Kojekude" target="_blanc" ><input id="behance" type="image" src="images/be-belo.png" alt="behance"/></a>
                        <a href="https://plus.google.com/u/0/108412693447363827719/posts" target="_blanc" ><input id="google" type="image" src="images/g-belo.png" alt="google"/></a>
                        <a href="http://www.linkedin.com/profile/view?id=297391446&trk=nav_responsive_tab_profile" target="_blanc" ><input id="in" type="image" src="images/in-belo.png" alt="in"/></a>
                        <a href="https://www.elance.com/s/edit/kojekude_studio/" target="_blanc" ><input id="elance" type="image" src="images/e-belo.png" alt="elance"/></a>
                        <a href="https://twitter.com/kojekude_studio" target="_blanc" ><input id="twiter" type="image" src="images/t-belo.png" alt="twiter"/></a>
                        <a href="https://www.facebook.com/pages/Kojekude/276273489198305" target="_blanc" ><input id="face" type="image" src="images/f-belo.png" alt="face"/></a>
                    </td>
                </tr>
                <tr>
                    <td id="polaze-pravo">
                        <a href="#" class="content">project by &copy; <img src="images/logo_futer.png" style="width:120px; margin-right: 8px" alt="logo"/> </a>
                    </td>
                </tr>
            </table>
        </div>
    </footer>
</div>

</body>

</html>