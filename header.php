  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Webdev</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Eazy styles -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/blocks.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/buttons.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/fonts.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/animation.css">

  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ezstyle/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
 
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
   </head>

  
    <!-- Navigation Desktop -->

   <header id="navigation">
    
      <div class="nav-left">     
       <a class="logo" href="<?php echo home_url();?>">Logo </a>
      </div>

      <div class="nav-right">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> 
      </div>

    </header>

  
<!-- Navigation Mobile -->

     <div class="mobmenu">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> 
     </div>


    <body>