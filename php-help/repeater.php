
<?php 
// Check rows exists.
if( have_rows('repeater_field_name') ):
while( have_rows('repeater_field_name') ) : the_row();
?>


<?php 
// End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>