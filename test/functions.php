<?php 
function ask_script_enqueue()
{
    //wp_enqueue_style( name ,src,version,);
    wp_enqueue_style("customstyle",get_template_directory_uri()."/awesome style.css",array(),'1.0.0','all');
    wp_enqueue_script("customjs",get_template_directory_uri()."/awesome.js",array(),'1.0.0',true);
}
//add_action(wp_enqueue_scripts,call back function,int periority,int accepted_arg)

function ask_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu("primary",'Primary Header Navigation');
}
/*
    add action
*/
add_action("wp_enqueue_scripts","ask_script_enqueue");
add_action("init","ask_theme_setup");
add_action("widgets_init","awesome_widget_setup");
/*
    add theme support
*/ 
add_theme_support("custom-header");
add_theme_support("custom-background"); // it is hook that help you to set a custom background image.
add_theme_support("post-formats",array("aside","image","video"));
add_theme_support("html5");
// side bar function

function awesome_widget_setup()
{
    register_sidebar(
        array(
            "name"=>"Sidebar",
            "id"=>"sidebar-1",
            "class"=>"custom",
            "description"=>"Standard Sidebar",
            "before_widget"=>'<aside id="%1$s" class="%2$s" ',
            "after_widget"=>"</aside>",
            "before_title"=>"<h1 class='widget-title'>",
            'after_title'=>'</h1>',
        )
        );
}
?>