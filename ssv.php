<!DOCTYPE html>
<html lang="en">
  <head>
    <title>employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  
  <nav  class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="border-bottom: white 1px solid;">
	    <div class="container" >
	      <a class="navbar-brand" href="index.html"><span>WSSCM</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> 
	      </button>

	      <div class="collapse navbar-collapse" id="" ">
	        <ul class="navbar-nav nav ml-auto" >
	          <li class="nav-item"><a href="index.html" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
            <li class="nav-item"><a href="ssv.php" class="nav-link" data-nav-section="employee"><span>SSVs</span></a></li>
            <li class="nav-item"><a href="bildar.php" class="nav-link" data-nav-section="employee"><span>Bildaars</span></a></li>
            <!-- <li class="nav-item"><a href="about.html" class="nav-link" data-nav-section="about"><span>Vehicles</span></a></li> -->
	          <li class="nav-item"><a href="containers.php" class="nav-link" data-nav-section="contact"><span>Contaienrs</span></a></li>
	        

	        </ul>
	      </div>
	    </div>
	  </nav>
    
      <section class="hero-wrap js-fullheight" style="background-image: url('images/employ.jpg');" data-section="home">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateX: '70%' }" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            
                  <h1 class="mb-4 text-right" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: bold;font-family: ;"> About Eployees</h1>
                  <p class="mb-4 text-right" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: 50;">Below is the list of SSVs and Bildaars</p>
                </div>
          </div>
        </div>
      </section>
		
    </section>



 <div style="text-align: center;padding-top: 20px; ">
     <h3 >SSVs List</h3>
 </div>   
<!-- table start -->
<center>
<table class="table table-striped " style="color: black;width: 90%; border: 1px black solid; margin-top: 40px;">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Councel</th>
        <th scope="col">Type</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    <tbody>
    <?php 
                   include("functions/function.php");
                   $get_ssv = "SELECT * FROM `ssv`;";
                   
                   $ssv_query_result = run_query($get_ssv);
                   
                   while($ssv=mysqli_fetch_array($ssv_query_result)){
                       $ssv_id = $ssv['ssv_id']
                    ?>
                       <tr>
        <th scope="row"><?php echo $ssv['ssv_id']; ?></th>
        <td><?php echo $ssv['ssv_name']; ?></td>
        <td><?php echo $ssv['ssv_area']; ?></td>
        <td><?php echo $ssv['ssv_type']; ?></td>
        <td><?php echo '<a href="ssvprofile.php?ssv_id=' . $ssv_id . '"><button class="btn btn-dark">View Profile</button></a>'; ?> </td>
        <!-- <td><a href="ssvprofile.php?".$ssv_id.><button class="btn btn-dark">View Profile</button></a></td> -->
      </tr>
                       
                       
                    <?php
                       
                   }
                   ?>
      <!-- <tr>
        <th scope="row">1</th>
        <td>Abdul Samad Khan</td>
        <td>baktganj</td>
        <td>Waste manager</td>
        <td><a href="ssvprofile.html"><button class="btn btn-dark">View Profile</button></a></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Muhammad Afaq</td>
        <td>Sheikh Multoon</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Muhammad Adnan</td>
        <td>Dosehra Chowk</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sami Ullah</td>
        <td>baktganj</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr> -->
    </tbody>
  </table>
</center>
<!-- table end -->

    <footer class="ftco-footer ftco-section" style="padding: 10px 0 0 0;">
     
        <div class="row">
        <div class="col-md-12 text-center">
         <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved @Team Cube Solution 
         </p>
        </div>
        </div>
     
      </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>