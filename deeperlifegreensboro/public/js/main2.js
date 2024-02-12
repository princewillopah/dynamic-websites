$(document).ready(function(){

     // -----------menu animated border-bottom ------------------- 
    // $(".navbar-nav li a").addClass('navbar-border-animation');
    // $(".navbar-nav .nav-item .nav-link").addClass('navbar-border-animation');
      $(".navbar-nav .mynavlink .mynavAnchor").addClass('navbar-border-animation');
    

    // -----------end menu animated border-bottom ------------------- 

    // -----------scrol top button -------------------

    $(window).scroll(function () {
        if($(this).scrollTop() < 100 ){
            $("#back-to-top").fadeOut(1000);
            // $(".navbar").css({'padding':'0'});
        }else{
            $("#back-to-top").fadeIn(1000);
            // $(".navbar").css({'padding':'0.5rem 1rem'});
        }
    });
    $("#back-to-top").click(function() {
        $('html ,body').animate({scrollTop: 0}, 1500);
    });
   // -----------end scrol top button ---------

   // -----------sticky nav -------------------

   $(window).scroll(function () {
    if($(this).scrollTop() > 400 ){
        //
        $("#navbar nav").fadeIn(1000).addClass('fixed-top').addClass('sticky');
        $("#navbar .navbar .navbar-brand img").addClass('my-logo');
    }
       if($(this).scrollTop() < 10 ){
           $("#navbar nav").removeClass('sticky');
           $("#navbar .navbar .navbar-brand img").removeClass('my-logo');
       }
    // else if($(this).scrollTop() > 250 ){
    //     $("#navbar nav").removeClass('fixed-top').removeClass('sticky');
    //     $("#navbar .navbar .navbar-brand img").removeClass('my-logo');
    // }
});
    $(window).scroll(function () {
        if($(this).scrollTop() > 400 ){
            //
            $("#all-navbar nav").fadeIn(1000).addClass('fixed-top').addClass('stickies');
            $("#all-navbar .navbar .navbar-brand img").addClass('my-logo');
        } else if($(this).scrollTop() > 250 ){
            $("#all-navbar nav").removeClass('fixed-top').removeClass('stickies');
            $("#all-navbar .navbar .navbar-brand img").removeClass('my-logo');
        }
    });
// =====================time counter ===============================

    // function initTimer()
    // {
    //     if($('.event_timer').length)
    //     {
    //         // Uncomment line below and replace date
    //         var target_date = new Date("August 7, 2019").getTime();

    //         // comment lines below
    //         var date = new Date();
    //         date.setDate(date.getDate() + 3);
    //         var target_date = date.getTime();
    //         //----------------------------------------

    //         // variables for time units
    //         var days, hours, minutes, seconds;

    //         var d = $('#day');
    //         var h = $('#hour');
    //         var m = $('#minute');
    //         var s = $('#second');

    //         setInterval(function ()
    //         {
    //             // find the amount of "seconds" between now and target
    //             var current_date = new Date().getTime();
    //             var seconds_left = (target_date - current_date) / 1000;

    //             // do some time calculations
    //             days = parseInt(seconds_left / 86400);
    //             seconds_left = seconds_left % 86400;

    //             hours = parseInt(seconds_left / 3600);
    //             seconds_left = seconds_left % 3600;

    //             minutes = parseInt(seconds_left / 60);
    //             seconds = parseInt(seconds_left % 60);

    //             // display result
    //             d.text(days);
    //             h.text(hours);
    //             m.text(minutes);
    //             s.text(seconds);

    //         }, 1000);
    //     }
    // }

    // initTimer();
// // =====================end time counter =============================



// // ==================== js text effect================================
//
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
// ==================== js text effect================================



   // -----------welcome card btn -------------------

//    $(".welcome-card-btn-1").hover(
//         function(){
//             $('.fa-1').css({"transform":"rotate(180deg)","margin-left":"5px"});
//         },
//         function(){
//             $('.fa-1').css({"transform":"rotate(0deg)","margin-left":"0px"});
//         }
//    );
//    $(".welcome-card-btn-2").hover(
//         function(){
//             $('.fa-2').css({"transform":"rotate(180deg)","margin-left":"5px"});
//         },
//         function(){
//             $('.fa-2').css({"transform":"rotate(0deg)","margin-left":"0px"});
//         }

//     );
//     $(".welcome-card-btn-3").hover(
//         function(){
//             $('.fa-3').css({"transform":"rotate(180deg)","margin-left":"5px"});
//         },
//         function(){
//             $('.fa-3').css({"transform":"rotate(0deg)","margin-left":"0px"});
//         }

//     );
 // -----------welcome card btn -------------------





});//end document.ready