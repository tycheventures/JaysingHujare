<?php

            $dir_name = "assets/images/";
            $images = glob($dir_name."*.jpg");
            // echo count($images);
            // print_r($images);
            // var_dump($images);  
?>

 
    
        <div class="swiper-container mb-4 " style="border: 10px solid white;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);">
            <div class="swiper-wrapper">
<?php
        
          foreach($images as $image) 
                {
                     
?> 
              
                    <div class="swiper-slide" ><img src="<?php echo $image;?>"></div> 
               
<?php            
                         
                 }  
?>


        
            </div>
                <div class="swiper-pagination"></div> 
        </div>