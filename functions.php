<?php

//Add Jquery, Javascript, Ajax
function portfolio_script_styles(){
 
 //Add Jquery
 wp_deregister_script('jquery');
 wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, '1.10.2', true);
 wp_enqueue_script('jquery');

 //Add GoogleMap Api
 wp_register_script('google-maps', "http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=false");
 wp_enqueue_script('google-maps');


 //Add Javascripts
 wp_register_script('modern-js', get_template_directory_uri() . '/js/modernizr-2.7.1.min.js', array('jquery'), false, false);
 wp_enqueue_script('modern-js');

 wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

  //Localize Scripts & Add Ajax
  $php_array = array( 'admin_ajax' => admin_url( 'admin-ajax.php' ) );
  wp_localize_script( 'main-js', 'php_array', $php_array );

 wp_enqueue_script('main-js');
}

add_action( 'wp_enqueue_scripts', 'portfolio_script_styles' );

//Add Google Analytics
function add_ga_code(){
?>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']); //Update 'UA-XXXXX-X' with valid account id
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<?php
}
add_action('wp_footer', 'add_ga_code');