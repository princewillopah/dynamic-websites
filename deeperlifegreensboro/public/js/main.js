// ==============================================================
//             owl carousel code
// ==============================================================
$(document).ready(function(){

    var welcomeSlide = $('.single-slider');
    welcomeSlide.owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        center: true,
        autoplayTimeout: 7000,
        smartSpeed: 1000,
        onInitialized: startProgressBar,//calling progressbar
        onTranslate: resetProgressBar,//calling progressbar
        onTranslated:  startProgressBar,//calling progressbar
    });

    welcomeSlide.on('translate.owl.carousel', function () {
        var slideLayer = $("[data-animation]");
        slideLayer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).removeClass('animated ' + anim_name).css('opacity', '0');
        });
    });

    welcomeSlide.on('translated.owl.carousel', function () {
        var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
        slideLayer.each(function () {
            var anim_name = $(this).data('animation');
            $(this).addClass('animated ' + anim_name).css('opacity', '1');
        });
    });

    $("[data-delay]").each(function () {
        var anim_del = $(this).data('delay');
        $(this).css('animation-delay', anim_del);
    });

    $("[data-duration]").each(function () {
        var anim_dur = $(this).data('duration');
        $(this).css('animation-duration', anim_dur);
    });
    
    // ------------custom nav-----------------------------------
    // for custom next prev
    let owl = $('.myOwlCarouselNav');
    owl.owlCarousel();
    // Go to the next item
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    });
    
    // ----------------slide progress bar-------------------
    
    // for ProgressBar
    function startProgressBar() {
        $(".slide-progress").css({width:'100%',transition:'width 5000ms'});
    }
    
    function resetProgressBar() {
        $(".slide-progress").css({width:0,transition:'width 0s'});
    }
    // ====================================================================
                // second owl carousel
    // ====================================================================
    // var welcomeSlide = $('.upcomingslider');
    // upcomingSlides.owlCarousel({
    //     items: 1,
    //     margin: 0,
    //     loop: true,
    //     nav: true,
    //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    //     dots: false,
    //     autoplay: true,
    //     autoplayTimeout: 7000,
    //     smartSpeed: 1500
    // });

});


// =========================================================================
// bootstrap progress bar
// ==========================================================================

// $(document).ready(function(){
//     var percent = 0;
//     bar = $('.transition-timer-carousel-progress-bar');
//     crsl = $('#myCarouselIndicators');
//     function progressBarCarousel(){
//         bar.css({width:percent+'%'});
//         percent = percent + 0.5;
//         if( percent>100){
//             percent = 0;
//             crsl.carousel('next');

//         }
//     }
//     crsl.carousel({interval:false, pause:true}).on('slid.bs.carousel',function () {});
//     var barInterval = setInterval(progressBarCarousel,30);
//     crsl.hover(
//         function(){
//             clearInterval(barInterval);
//         },
//         function(){
//             barInterval = setInterval(progressBarCarousel,30);
//         }
//     );
// });


// =========================================================================
// multiple
// ==========================================================================
$('.multiple-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
        items:1
        },
        600:{
        items:2
        },
        1000:{
        items:4
        }
    },
});

// for custom next prev
let owls = $('.myMultipleSliderNav');
owls.owlCarousel();
// Go to the next item
$('.myMultipleSliderNavcustomNextBtn').click(function() {
    owls.trigger('next.owl.carousel');
});
// Go to the previous item
$('.myMultipleSliderNavcustomPrevBtn').click(function() {
    owls.trigger('prev.owl.carousel', [300]);
});