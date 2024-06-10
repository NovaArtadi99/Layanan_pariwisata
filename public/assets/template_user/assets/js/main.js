/**
* Template Name: Nova
* Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
* Updated: Mar 17 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    /**
     * Preloader
     */
    // Page loading animation
    // $(window).on('load', function() {

    //     $('#js-preloader').addClass('loaded');

    // });

    // $(window).on('load', function() {
    // 	if($('.cover').length){
    // 		$('.cover').parallax({
    // 			imageSrc: $('.cover').data('image'),
    // 			zIndex: '1'
    // 		});
    // 	}

    // 	$("#preloader").animate({
    // 		'opacity': '0'
    // 	}, 600, function(){
    // 		setTimeout(function(){
    // 			$("#preloader").css("visibility", "hidden").fadeOut();
    // 		}, 300);
    // 	});
    // });
    const preloader = document.querySelector('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
        });
    }

    /**
     * Mobile nav toggle
     */
    const mobileNavShow = document.querySelector('.mobile-nav-show');
    const mobileNavHide = document.querySelector('.mobile-nav-hide');

    document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
        el.addEventListener('click', function (event) {
            event.preventDefault();
            mobileNavToogle();
        })
    });

    function mobileNavToogle() {
        document.querySelector('body').classList.toggle('mobile-nav-active');
        mobileNavShow.classList.toggle('d-none');
        mobileNavHide.classList.toggle('d-none');
    }

    /**
     * Toggle mobile nav dropdowns
     */
    const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

    navDropdowns.forEach(el => {
        el.addEventListener('click', function (event) {
            if (document.querySelector('.mobile-nav-active')) {
                event.preventDefault();
                this.classList.toggle('active');
                this.nextElementSibling.classList.toggle('dropdown-active');

                let dropDownIndicator = this.querySelector('.dropdown-indicator');
                dropDownIndicator.classList.toggle('bi-chevron-up');
                dropDownIndicator.classList.toggle('bi-chevron-down');
            }
        })
    });

    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector('.scroll-top');
    if (scrollTop) {
        const togglescrollTop = function () {
            window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
        window.addEventListener('load', togglescrollTop);
        document.addEventListener('scroll', togglescrollTop);
        scrollTop.addEventListener('click', window.scrollTo({
            top: 0,
            behavior: 'smooth'
        }));
    }

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: '.glightbox'
    });

    /**
     * Init swiper slider with 1 slide at once in desktop view
     */
    new Swiper('.slides-1', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    /**
     * Init swiper slider with 3 slides at once in desktop view
     */
    new Swiper('.slides-3', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 40
            },

            1200: {
                slidesPerView: 3,
            }
        }
    });

    /**
     * Porfolio isotope and filter
     */
    let portfolionIsotope = document.querySelector('.portfolio-isotope');

    if (portfolionIsotope) {

        let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
        let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
        let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

        window.addEventListener('load', () => {
            let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
                itemSelector: '.portfolio-item',
                layoutMode: portfolioLayout,
                filter: portfolioFilter,
                sortBy: portfolioSort
            });

            let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
            menuFilters.forEach(function (el) {
                el.addEventListener('click', function () {
                    document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
                    this.classList.add('filter-active');
                    portfolioIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    if (typeof aos_init === 'function') {
                        aos_init();
                    }
                }, false);
            });

        });

    }

    /**
     * Animation on scroll function and init
     */
    function aos_init() {
        AOS.init({
            duration: 800,
            easing: 'slide',
            once: true,
            mirror: false
        });
    }
    window.addEventListener('load', () => {
        aos_init();
    });

    //   penginapan
    // Memastikan bahwa elemen .properties-box dan .properties-filter ada
    const elem = document.querySelector('.properties-box');
    const filtersElem = document.querySelector('.properties-filter');

    if (elem) {
        // Menginisialisasi Isotope pada elemen .properties-box
        const rdn_events_list = new Isotope(elem, {
            itemSelector: '.properties-items', // Pastikan item properti memiliki kelas .properties-items
            layoutMode: 'masonry'
        });

        if (filtersElem) {
            // Menambahkan event listener untuk klik pada elemen filter
            filtersElem.addEventListener('click', function (event) {
                if (!event.target.matches('a')) {
                    return;
                }
                const filterValue = event.target.getAttribute('data-filter');
                rdn_events_list.arrange({
                    filter: filterValue // Menyaring item berdasarkan nilai filter yang dipilih
                });
                // Mengatur kelas is_active pada elemen yang diklik
                filtersElem.querySelector('.is_active').classList.remove('is_active');
                event.target.classList.add('is_active');
                event.preventDefault();
            });
        }
    }

    // Menu Dropdown Toggle
    if ($('.menu-trigger').length) {
        $(".menu-trigger").on('click', function () {
            $(this).toggleClass('active');
            $('.header-area .nav').slideToggle(200);
        });
    }

    // Menu elevator animation untuk smooth scroll
    $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                var width = $(window).width();
                if (width < 991) {
                    $('.menu-trigger').removeClass('active');
                    $('.header-area .nav').slideUp(200);
                }
                $('html,body').animate({
                    scrollTop: (target.offset().top) - 80
                }, 700);
                return false;
            }
        }
    });
    // Kendaraan
    // Memilih elemen .iso-section dan .filter-wrapper
    const isoElem = document.querySelector('.iso-section');
    const isoFiltersElem = document.querySelector('.filter-wrapper');

    if (isoElem) {
        // Menginisialisasi Isotope pada elemen .iso-section
        const isoRdnEventsList = new Isotope(isoElem, {
            itemSelector: '.iso-item', // Pastikan item dalam iso-section memiliki kelas .iso-item
            layoutMode: 'masonry'
        });

        if (isoFiltersElem) {
            // Menambahkan event listener untuk klik pada elemen filter .filter-wrapper
            isoFiltersElem.addEventListener('click', function (event) {
                if (!event.target.matches('a')) {
                    return;
                }
                const filterValue = event.target.getAttribute('data-filter');
                isoRdnEventsList.arrange({
                    filter: filterValue // Menyaring item berdasarkan nilai filter yang dipilih
                });
                // Mengatur kelas is_active pada elemen yang diklik
                isoFiltersElem.querySelector('.is_active').classList.remove('is_active');
                event.target.classList.add('is_active');
                event.preventDefault();
            });
        }
    }

    // detail car
    $(document).ready(function () {
        $('#pills-tab a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

        $('#pills-tab a').on('shown.bs.tab', function (e) {
            $('#pills-tab a').removeClass('active');
            $(e.target).addClass('active');
        });
    });

    // beranda car
    // var carousel = function() {
	// 	$('.carousel-car').owlCarousel({
	// 		center: true,
	// 		loop: true,
	// 		autoplay: true,
	// 		items:1,
	// 		margin: 30,
	// 		stagePadding: 0,
	// 		nav: false,
	// 		navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
	// 		responsive:{
	// 			0:{
	// 				items: 1
	// 			},
	// 			600:{
	// 				items: 2
	// 			},
	// 			1000:{
	// 				items: 3
	// 			}
	// 		}
	// 	});
	// };
	// carousel();


});
