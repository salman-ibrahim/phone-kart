$(document).ready(function(){

    // Main Owl Carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1
    });

    // Best Selling Owl Carousel
    $('#best-selling .owl-carousel').owlCarousel({
        loop: true,
        nav:true,
        dots: false,
        responsive:{
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items:5
            }
        }
    });

    // Isotope Filter
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // Category Filter
    $('.button-group').on('click','button', function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    // New and Trending Owl Carousel
    $('#new-and-trending .owl-carousel').owlCarousel({
        loop: true,
        nav:false,
        dots: true,
        responsive:{
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items:5
            }
        }
    });

    // Blog Posts Owl Carousel
    $('#latest-blog .owl-carousel').owlCarousel({
        loop: true,
        nav:false,
        dots: true,
        responsive:{
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // Product Quantity Sections
    let $qty_up = $('.qty .qty-up');
    let $qty_down = $('.qty .qty-down');
    // let $qty_input = $('.qty .qty-input');

    // Click Event Quantity+
    $qty_up.on('click', function(){
        let $qty_input = $(this).siblings('.qty-input');
        if($qty_input.val() < 10){
            $qty_input.val(parseInt($qty_input.val())+1);
            }
    });

    // Click Event Quantity-
    $qty_down.on('click', function(){
        let $qty_input = $(this).siblings('.qty-input');
        if($qty_input.val() != 1){
        $qty_input.val(parseInt($qty_input.val())-1);
        }
    });

});