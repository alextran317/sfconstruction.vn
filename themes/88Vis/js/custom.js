$(document).ready(function () {
	$('.show-nav-mobile, .close-nav-mobile, .main-nav-inner>ul>li>a').on('click', function(){
        $('.header').toggleClass('header-mobile');
        if($(window).width() < 1190){
            $('body').toggleClass('body-overfl-hidden');
        }
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.header').addClass('active');
            $('.icon-back-top').addClass('active');
        }
        else{
            $('.header').removeClass('active');
            $('.icon-back-top').removeClass('active');
        } 
    });   
    $('.block-lydo-top').on('click', function(){
        $('.block-lydo-bottom').slideUp('fast');
        $(this).next().stop().slideToggle();
        $('.block-lydo-item').removeClass('block-lydo-item-active');
        $(this).parent().toggleClass('block-lydo-item-active');
    });


	$(".icon-back-top").click(function () {
		$("body,html").animate({
			scrollTop: 0
		},
		"fast")
	});

    // Tab du an.
    $('.block-du-an-ht .tab-da-item:not(:first), .block-du-an-tc .tab-da-item:not(:first), .block-du-an-nt .tab-da-item:not(:first)').hide();
    $('.tab-da-nav li').click(function(){
        $(this).parent().children('li').removeClass('tab-da-nav-active');
        $(this).addClass('tab-da-nav-active');
        $(this).parent().next().children('.tab-da-item').hide();
        var activeTab = $(this).attr('data-tab');
        $(activeTab).fadeIn();
        return false;
    });

    // Slick Carousel Review
	$('.review-carousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="arrow-btn arrow-btn-prev fas fa-chevron-left"></i>',
        nextArrow: '<i class="arrow-btn arrow-btn-next fas fa-chevron-right"></i>', 
    });
    // Slick Carousel DT.
    $('.dt-carousel').slick({
        autoplay: true,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        prevArrow: '<i class="arrow-btn arrow-btn-prev fas fa-chevron-left"></i>',
        nextArrow: '<i class="arrow-btn arrow-btn-next fas fa-chevron-right"></i>',
        responsive: [
        {
            breakpoint: 1190,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        },
        {
            breakpoint: 890,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 590,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },]
    });
    // Slick Carousel Pro Gallery
    $('.pro-gallery-large').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.pro-gallery-list',
        prevArrow: '<i class="far fa-chevron-left arrow-btn arrow-btn-prev"></i>',
        nextArrow: '<i class="far fa-chevron-right arrow-btn arrow-btn-next"></i>',
    });
    $('.pro-gallery-list').slick({
        slidesToShow: 8,
        slidesToScroll: 8,
        asNavFor: '.pro-gallery-large',
        dots: false,
        arrows: false,
        // centerMode: true,
        focusOnSelect: true,
        responsive: [
        {
            breakpoint: 1220,
            settings: {
                slidesToShow: 8,
                slidesToScroll: 8
            }
        },
        {
            breakpoint: 922,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6
            }
        },
        {
            breakpoint: 710,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        },
        {
            breakpoint: 470,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },]
    });
});