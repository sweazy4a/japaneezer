<?php if( have_rows('example-posts') ): ?>
  <?php while( have_rows('example-posts') ): the_row(); ?> 
  
   <?php 
   global $post; ?>


    <?php 
    global $post;
    $post_object = get_sub_field('post-object2');
    ?>

    <?php
    if( $post_object ): 

	// override $post
    global $post;
   	$post = $post_object;
    setup_postdata( $post ); 
    $postType = get_post_type_object(get_post_type());  
   ?>
       

  <div class="course-item course-crucial" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">

    <div class="post-txt">

   <p><?php echo get_sub_field('desc')?></p>
   <h4><?php the_title(); ?></h4>
