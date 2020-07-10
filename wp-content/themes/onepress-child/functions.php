<?php

if(!function_exists('onepress_qode_child_theme_enqueue_scripts')) {

	Function onepress_qode_child_theme_enqueue_scripts() {
		wp_register_style('onepress-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('onepress-childstyle');
		wp_register_script('onepress-childscript', get_stylesheet_directory_uri() . '/blog.js');
		wp_enqueue_script('onepress-childscript');
	}

	add_action('wp_enqueue_scripts', 'onepress_qode_child_theme_enqueue_scripts', 11);
}


function calendar_js(){
    ?>
    <script>
    jQuery(function($){
            var start = $('.check-in input').first();
            var end = $('.check-out input').first();

            start.on('change', function() {
                    var start_date = $(this).datepicker('getDate');
                    start_date.setDate(start_date.getDate() + 1);
                    end.datepicker('option', 'minDate', start_date);
            });
    });
    </script>
    <?php
    }
    add_action('wp_footer', 'calendar_js');
    
 
