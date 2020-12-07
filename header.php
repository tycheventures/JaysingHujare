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
<html lang="en">
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
 
    <header class="header">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <a href="#"><img src="assets/img/logo.png" class="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse w-100 flex-md-column" id="navbarCollapse">
            <div class="ml-auto">
              <div class="follow">
                <span>follow us : </span>
                <a href="#" class="icon"><img src="assets/img/f-icon.png"></a>
                <a href="#" class="icon"><img src="assets/img/g+-icon.png"></a>                
              </div>
            </div>
            <ul class="navbar-nav ml-auto menu-links mb-2 mb-md-0">
              <?php foreach ($header_menus as $href => $menu) { ?>
                <li class="nav-item">
                  <a href="<?php echo $href ?>" class="links <?php echo (basename($_SERVER['PHP_SELF']) == $href ? 'active' : ''); ?> " ><?php echo $menu; ?></a>
                </li>
              <?php } ?> 
            </ul>
          </div>
        </nav>
      </div> 

    </header>

    <div class="main-content">
      <div class="container">    
      <!-- Main content start -->
