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
        <nav class="navbar navbar-expand-lg navbar-light">
          <a href="#"><img src="assets/img/logo.png" class="header"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            <div class="follow">
              <span>follow us : </span>
              <a href="#" class="icon"><img src="assets/img/f-icon.png"></a>
              <a href="#" class="icon"><img src="assets/img/g+-icon.png"></a>                
            </div>
            <div class="menu-links">
              <ul class="navbar-nav">

                <?php foreach ($header_menus as $href => $menu) { ?>

                <li class="nav-item active">
                  <a href="<?php echo $href ?>" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == $href ? 'active' : ''); ?> " ><?php echo $menu; ?></a>
                </li>

                <?php } ?>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="main-content">
      <div class="container">    
      <!-- Main content start -->
