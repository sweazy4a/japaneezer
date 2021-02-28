<?php
   $imgID03 = get_sub_field('bgnew3');
   $imgSize03 = "full"; // (thumbnail, medium, large, full or custom size) 
   $imgArr03 = wp_get_attachment_image_src( $imgID03, $imgSize03 );
  ?>

  <div class="hero-banner course-banner the-container" style="background-image:url(<?php echo $imgArr03[0] ?> );">

  </div>