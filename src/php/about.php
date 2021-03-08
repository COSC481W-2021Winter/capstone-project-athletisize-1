<?php
include_once 'header.php';
?>
<html>
<head>
    <title>Sports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="../style/about.css">
</head> 
</head> 
<body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<section>
    <section class="team-page-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h1 style="color:#009999">MEET THE TEAM</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum sit amet nulla ac tristique. Pellentesque gravida nisl nec ullamcorper hendrerit. Etiam id quam aliquet, accumsan dui in, maximus mauris. Pellentesque placerat ut felis nec commodo. In neque massa, consectetur ac odio non, dictum commodo lorem. </p>
                <hr>
            </div>

            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <div class="image">
                            <img src="../images/Josh.jpg" id="myBtn">
                            <div id="myModal" class="modal">

                              <!-- Modal content -->
                              <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Some text in the Modal..</p>
                            </div>

                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Josh</a></h3>
                        <div class="designation">Backend Developer</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    <div class="image">
                        <a href="#"><img src="../images/Emily.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Emily</a></h3>
                        <div class="designation">Full Stack Developer </div>
                    </div>
                </div>
            </div>
            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-github"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                  <div class="image">
                    <a href="#"><img src="../images/Yaoze.jpg" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h3><a href="#">Yaoze</a></h3>
                    <div class="designation">Backend Developer </div>
                </div>
            </div>
        </div>
        <!-- Team Block -->
        <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <ul class="social-icons">
                 <li><a href="#"><i class="fab fa-github"></i></a></li>
                 <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
             </ul>
             <div class="image">
                <a href="#"><img src="../images/Dylan.jpg" alt="" /></a>
            </div>
            <div class="lower-content">
                <h3><a href="#">Dylan</a></h3>
                <div class="designation"> Full Stack Developer </div>
            </div>
        </div>
    </div>
    <!-- Team Block -->
    <div class="team-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            <div class="image">
                <a href="#"><img src="../images/Jonathan.jpg" alt="" /></a>
            </div>
            <div class="lower-content">
                <h3><a href="#">Jonathan</a></h3>
                <div class="designation">Front End Developer </div>
            </div>
        </div>
    </div>
    <!-- Team Block -->
    <div class="team-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <ul class="social-icons">
             <li><a href="#"><i class="fab fa-github"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
         <div class="image">
            <a href="#"><img src="../images/Ali.jpg" alt="" /></a>
        </div>
        <div class="lower-content">
            <h3><a href="#">Ali</a></h3>
            <div class="designation">Front End Developer </div>
        </div>
    </div>
</div>
<!-- Team Block -->
<div class="team-block col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
        <ul class="social-icons">
         <li><a href="#"><i class="fab fa-github"></i></a></li>
         <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
     </ul>
     <div class="image">
        <a href="#"><img src="../images/Rahmah.jpg" alt="" /></a>
    </div>
    <div class="lower-content">
        <h3><a href="#">Rahmah </a></h3>
        <div class="designation">Front End Developer </div>
    </div>
</div>
</div>
<!-- Team Block -->
<div class="team-block col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
        <ul class="social-icons">
        </ul>
        <div class="image">
            <a href="#"><img src="../images/Michael.png" alt="" /></a>
        </div>
        <div class="lower-content">
            <h3><a href="#">Michael</a></h3>
            <div class="designation">Persona</div>
        </div>
    </div>
</div>

</div>
</div>
</section>
</section>
</body>
</html>

<?php
include_once 'footer.php';
?>
