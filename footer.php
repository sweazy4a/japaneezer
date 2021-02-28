<footer class="ez-container">

 <section class="footer-row">
   
   <div class="foot-one">
     <?php 
    if(is_active_sidebar('footer_area_one')){
    dynamic_sidebar( 'footer_area_one' ); } ?>


    </div>

    <div class="foot-second">

    <?php if(is_active_sidebar('footer_area_two')){
    dynamic_sidebar( 'footer_area_two' ); } ?>

   </div>

   
   <div class="foot-third">

     <?php if(is_active_sidebar('footer_area_two')){
     dynamic_sidebar( 'footer_area_two' ); } ?>

   </div>

 </section>
 

</footer>

</section>

<!-- Script goes heree -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



<?php wp_footer();?>

</body>

</html>