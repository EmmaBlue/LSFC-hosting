<body>
  <div class="mainSect container-fluid">
    <div class="row contactPage" id="navRow">
        <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6" id="logoContain">
            <a href="page-home.php?link=1"><img src="wp-content/themes/lsfc_working-final/images/lsfc-logo.svg" alt="London Squash and Fitness Club Logo"></a>
        </div>
        <div class="col-lg-9 col-md-10 col-sm-6 col-xs-6">
            <div class="navigation" id="navContain">
                <div id="navigation">

                    <ul>
                        <li ><a href="page-home.php?link=1" name="link2" title="Home">Home</a></li>
                        <li class="#"><a href="page-about.php?link=2" name="link2" title="About">About</a> </li>
                        <li class="#"><a href="page-programs.php?link=3" name="link3" title="Our Programs">Our Programs</a></li>
                        <li class="#"><a href="page-book-visit.php?link=4" name="link4" title="Book a Visit">Book a Visit</a></li>
                        <li class="#"><a href="https://lsfc.gametime.net/auth" title="Book a Court">Book a Court</a></li>
                        <li><a href="page-contact.php?link=5" name="link5" title="Contact Us">Contact</a> </li>

                          <li> <a class="socNav" href="https://www.facebook.com/groups/LondonSFC/about/"><i class="fa fa-facebook"></i></a></li>
                          <li><a class="socNav" href="https://www.instagram.com/londonsquash/"><i class="fa fa-instagram"></i></a></li>
                          <li>  <a class="socNav" href="https://twitter.com/londonsquash"><i class="fa fa-twitter"></i></a></li>
                          <li><a class="socNav" href="https://www.linkedin.com/company/london-squash-&-fitness-club/"><i class="fa fa-linkedin"></i></a></li>


                        <li class="membersOnly"><a href="page-members.php?link=6" name="link6" title="For Members">For Members</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
  <?php
          $link=$_GET['link'];
          if ($link == '1'){
              require 'page-home.php';
          }
          if ($link == '2'){
              require 'page-about.php';
          }

          if ($link == '3'){
              require 'page-programs.php';
          }

          if ($link == '4'){
              require 'page-book-visit.php';
          }

          if ($link == '5'){
              require 'page-contact.php';
          }
          if ($link == '6'){
              require 'page-members.php';
          }
          if ($link == '7'){
              require 'page-privacy-policy.php';
          }
          if ($link == '8'){
              require 'page-conduct-code.php';
          }
  ?>
