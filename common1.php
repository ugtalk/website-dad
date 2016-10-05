        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./W3.CSS_files/w3.css">
        <link rel="stylesheet" href="./W3.CSS_files/css">
        <link rel="stylesheet" href="./W3.CSS_files/css(1)">
        <link rel="stylesheet" href="./W3.CSS_files/font-awesome.min.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
            .w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
            .fa-anchor,.fa-coffee {font-size:200px}

            .header-background{
               background-image: url(images/1234.jpg);
               background-position: center center;
               background-repeat: no-repeat;   
            }
            .background-h1{
                background-image: url(images/12345.png);
                background-repeat: repeat;
                max-width: 800px;
            }

            .background-h2{
                background-image: url(images/12345.png);
                background-repeat: repeat;
                max-width: 800px;

            }

            .background-h3{
                background-image: url(images/12345.png);
                background-repeat: repeat;
                max-width: 800px;
            }

            .overlay {
            background: transparent; 
            position:relative; 
            max-width: inherit;
                width:100%;
            height:400px; 
            top:400px; 
            margin-top:-400px;}

        </style>

        <!--Script for smooth scrolling. Source here-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!--Script for smooth scrolling begins here.-->
        <script>
        $(function() {

            $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) 
            {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) 
              {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
        </script>

        <!--Script for smooth scrolling ends here-->
    </head>
    <body>

        <!-- Navbar -->
        <ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
          <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
            <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i>
            </a>
          </li>
          <li><a href="./index2.php#home" class="w3-padding-large w3-white">HOMEPHP
              </a>
          </li>
          <li class="w3-hide-small"><a href="./index2.php#work" class="w3-padding-large w3-hover-white">OUR WORK</a>
          </li>
          <li class="w3-hide-small"><a href="./index2.php#about" class="w3-padding-large w3-hover-white">ABOUT US</a>
          </li>
          <li class="w3-hide-small"><a href="#contact" class="w3-padding-large w3-hover-white">CONTACT US</a>
          </li>
          <li class="w3-hide-small"><a href="resources2.php" class="w3-padding-large w3-hover-white">RESOURCES</a>
          </li>
        </ul>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
          <ul class="w3-navbar w3-left-align w3-large w3-black">
            <li><a class="w3-padding-large" href="./index2.php#work">OUR WORK</a></li>
            <li><a class="w3-padding-large" href="./index2.php#about">ABOUT US</a></li>
            <li><a class="w3-padding-large" href="#contact">CONTACT US</a></li>
            <li><a class="w3-padding-large" href="resources2.php">RESOURCES</a></li>
          </ul>
        </div>