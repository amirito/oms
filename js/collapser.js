jQuery(function(){
	 
"use strict";	 

    var $menu          = jQuery('.menu_container'),
        $menu_ul       = jQuery('ul', $menu),
        $collapser     = jQuery('.mobile_collapser', $menu),
        $lihasdropdown = jQuery('.menu_container ul li.menu-item-has-children' ),
        $sublihasdropdown = jQuery('.menu_container ul li ul li.menu-item-has-children' ),
        $subsublihasdropdown = jQuery('.menu_container ul li ul li ul li.menu-item-has-children' );

    $collapser.on('click', function(){
        $menu_ul.toggleClass('collapsed');
    })
    
    $lihasdropdown = $lihasdropdown.addClass('li has-dropdown');
    $sublihasdropdown = $sublihasdropdown.addClass('subli').removeClass('li');
    $subsublihasdropdown = $subsublihasdropdown.addClass('subsubli').removeClass('subli').removeClass('li');

    jQuery('.li.has-dropdown').on('click', 'a', function(e){
        $lihasdropdown.not( jQuery(this).parent() ).children(".dropdown-menu").removeClass("show");
        $sublihasdropdown.children(".dropdown-menu").removeClass('show');
        jQuery(this).next(".dropdown-menu").toggleClass("show");

        e.stopPropagation();
    });

    jQuery('.subli.has-dropdown').on('click', 'a', function(e){
        
        $sublihasdropdown.not( jQuery(this).parent() ).children(".show").removeClass("show");
        jQuery(this).next(".dropdown-menu").toggleClass("show");
        
        e.stopPropagation();
    });

    jQuery('.subsubli.has-dropdown').on('click', 'a', function(e){
        
        $subsublihasdropdown.not( jQuery(this).parent() ).children(".show").removeClass("show");
        jQuery(this).next(".dropdown-menu").toggleClass("show");
        
        e.stopPropagation();
    });

    // HIDE DROPDOWN MENU WHEN CLICKING ELSEWHERE (v1.0.2)
    jQuery(document.body).on('click', function(){
        $lihasdropdown
        .children(".dropdown-menu").removeClass('show');
    })

});

// FIX Menu Resize Bug from mobile to desktop (Thanks to irata for fixing that!) (v1.0.2)
jQuery(window).resize(function(){
		      
"use strict";		      

jQuery('.menu_container ul').removeClass('collapsed'); 

});