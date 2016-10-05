<!DOCTYPE html>
<!-- saved from url=(0065)http://www.w3schools.com/w3css/tryw3css_templates_start_page.htm# -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Gupta and Associates | Architects | Kanpur</title>
            
 
        <?php include '\common1.php'; ?>
        

        <!-- Header -->
        <div id="home" class="w3-container w3-red w3-center w3-padding-128 header-background">

          <center><h1 class="w3-margin w3-jumbo background-h1">WE BUILD YOUR DREAM</h1></center>
          <center><p class="w3-xlarge background-h2">ARCHITECTS, INTERIOR DESIGNERS AND PLANNERS
              WITH 30+ YEARS OF EXPERIENCE</p></center>
          <center><p class="w3-xlarge-slight background-h3">
            HOMES, FACTORIES, APARTMENTS, SHOPS, SCHOOLS, RESTAURANT, PLACE OF WORSHIP, MALLS,...
            </p></center>

          <a href="#work" class="w3-btn w3-padding-16 w3-large w3-margin-top">LEARN MORE</a>

        </div>

        <!-- First Grid -->
        <div id = "work" class="w3-row-padding w3-padding-64 w3-container">
          <div class="w3-content">
            <div class="w3-twothird">
              <h1>OUR WORK</h1>
              <h5 class="w3-padding-32">Gupta and Associates is among the oldest running architecture firms in Kanpur with over 30+ years of experience in making homes, factories, apartments, schools, malls, shops, restaurants, places of worship and many other structures at affordable rates.</h5>

              <p class="w3-text-grey">The map below represents our work throughout the city, and beyond. Click on the markers below to see details of each work:</p>

              <div class="overlay" onClick="style.pointerEvents='none'"></div>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1T2FAa3zfjmTwMgAymsu2cUMRkco" width=100% height="400"></iframe>
            </div>
        <!--    <div class="w3-third w3-center">
              <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
            </div>
        -->
          </div>
        </div>

        <!-- Second Grid -->
        <div id = "about" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
          <div class="w3-content">
        <!--
              <div class="w3-third w3-center">
              <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
            </div>
        -->
            <div class="w3-twothird">
              <h1>ABOUT US</h1>

              <p class="w3-text-grey">Gupta And Associates is run by architects Raj Deep Gupta and Shashi Gupta.</p>
              <p class="w3-text-grey">Architect R. D. Gupta is a graduate of IIT Kharagpur (1979) and architect Shashi Gupta graduated from MSU Baroda (1983).
              </p>
              <p class="w3-text-grey">Together, the two of them have a combined experience of more than fifty years in architecture and interior design with hundreds of projects under their belt, in and outside the city.</p>
              <img src="images/architect_kanpur_raj_deep_gupta.jpg" height="150px"><img src="images/architect_kanpur_shashi_gupta.jpg" height="150px">
              <p>Caution: The city comprises of many architects without certified architecture degrees and registrations. Working with such an 'architect' renders your structure illegal. To check if your 'architect' has an architecture degree and is registered, use this link: <a href="https://www.coa.gov.in/search_arch.php?layout=&lang=1&level=0&linkid=48&lid=289" >Council of Architects, India</a></p>
            </div>
          </div>
        </div>
        
        <?php include '\common2.php'; ?>

        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script>


    </body>
</html>
