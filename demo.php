<?php

$header_menus = array(
  'header.php' => 'Home' ,
  'deals.php' => 'New Deals' ,
  'current_project.php' => 'Current Projects',
  'complete_project.php' => 'Completed Projects',
  'contact.php' => 'Contact Us',
  'about.php' => 'About Us',
   );


$menus = array(      

               'home.php' => 'Home',
               'current_project.php' => 'Current Projects',
               'Completed_Project.php' => 'Completed Projects',
               'contact.php' => 'Contact Us',
               'about.php' => 'About Us'

            
      );

$current_page = basename( $_SERVER['REQUEST_URI'] );
?>
 <!DOCTYPE html>
 <html>
 <head>
 	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jaysing Hujare</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--slider files -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/slider.js"></script>
 </head>
 <body>
 
 <div class="container">
 <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
  	<div>
  		<div style="line-height: 1rem; float: rigt;text-align: right;">
              <span>follow us : </span>
              <a href="#" class="icon"><img src="assets/img/f-icon.png"></a>
              <a href="#" class="icon"><img src="assets/img/g+-icon.png"></a>
            </div> 
  	</div>
    <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse ml-auto main" id="navbarNav">
                  <div class="menu-links row">
              <div class="col">
                <ul class="navbar-nav">

                  <?php foreach ($header_menus as $href => $menu) { ?>

                  <li class="nav-item active">
                    <a href="<?php echo $href ?>" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == $href ? 'active' : ''); ?> " ><?php echo $menu; ?></a>
                  </li>

                  <?php } ?>

                </ul>
              </div>
            </div>
                </div>
              </nav>
  </nav>
</div>
</div>

 </body>
 </html>