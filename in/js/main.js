

jQuery(document).ready(function($) {

	"use strict";

	AOS.init({
		duration: 800,
		easing: 'slide',
		once: true
	});

	var lozadFunc = function() {
		const el = document.querySelectorAll('img');
		const observer = lozad(el);
		observer.observe();	
	}
	lozadFunc();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {

			var counter = 0;
			$('.site-mobile-menu .has-children').each(function(){
				var $this = $(this);

				$this.prepend('<span class="arrow-collapse collapsed">');

				$this.find('.arrow-collapse').attr({
					'data-toggle' : 'collapse',
					'data-target' : '#collapseItem' + counter,
				});

				$this.find('> ul').attr({
					'class' : 'collapse',
					'id' : 'collapseItem' + counter,
				});

				counter++;

			});

		}, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
			var $this = $(this);
			if ( $this.closest('li').find('.collapse').hasClass('show') ) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
			e.preventDefault();  

		});

		$(window).resize(function() {
			var $this = $(this),
			w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
			var container = $(".site-mobile-menu");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();


	
	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
				center: false,
				items: 1,
				loop: true,
				stagePadding: 0,
				margin: 0,
				autoplay: true,
				nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
				responsive:{
					600:{
						margin: 0,
						nav: true,
						items: 2
					},
					1000:{
						margin: 0,
						stagePadding: 0,
						nav: true,
						items: 3
					},
					1200:{
						margin: 0,
						stagePadding: 0,
						nav: true,
						items: 4
					}
				}
			});
		}

		$('.slide-one-item').owlCarousel({
			center: false,
			items: 1,
			loop: true,
			stagePadding: 0,
			margin: 0,
			smartSpeed: 1000,
			autoplay: true,
			pauseOnHover: false,
			nav: true,
			navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
		});
		$('.slide-five-item').owlCarousel({
			center: false,
			// items: 5,
			loop: true,
			stagePadding: 0,
			margin: 50,
			smartSpeed: 1000,
			autoplay: true,
			pauseOnHover: false,
			nav: false,
			navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
			responsive:{
				1200:{
					items:5
				},
				1000:{
					items:4
				},
				500:{
					items:3
				},
				0:{
					items:2
				}
			}
		});
		$('.slide-four-item').owlCarousel({
			center: false,
			items: 4,
			loop: true,
			stagePadding: 0,
			margin: 10,
			smartSpeed: 1000,
			autoplay: true,
			pauseOnHover: false,
			nav: false,
			navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
		});
		$('#packages').owlCarousel({
			center: false,
			items: 4,
			loop: true,
			stagePadding: 0,
			margin: 0,
			smartSpeed: 1000,
			autoplay: true,
			pauseOnHover: false,
			nav: false,
			// navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
		});
	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
			responsive: true,
			parallaxBackgrounds: true,
			parallaxElements: true,
			horizontalScrolling: false,
			hideDistantElements: false,
			scrollProperty: 'scroll'
		});
	};
	siteStellar();

	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
			var $this = $(this).html(event.strftime(''
				+ '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
				+ '<span class="countdown-block"><span class="label">%d</span> days </span>'
				+ '<span class="countdown-block"><span class="label">%H</span> hr </span>'
				+ '<span class="countdown-block"><span class="label">%M</span> min </span>'
				+ '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});

	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
	// var OnePageNavigation = function() {
	// 	var navToggler = $('.site-menu-toggle');
	// 	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
	// 		e.preventDefault();

	// 		var hash = this.hash;

	// 		$('html, body').animate({
	// 			'scrollTop': $(hash).offset().top
	// 		}, 600, 'easeInOutCirc', function(){
	// 			window.location.hash = hash;
	// 		});

	// 	});
	// };
	// OnePageNavigation();
	// Modified navigation
	var OnePageNavigation = function() {
		var navToggler = $('.site-menu-toggle');
		$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#']", function(e) {
			e.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				'scrollTop': $(hash).offset().top
			}, 600, 'easeInOutCirc', function(){
				window.location.hash = hash;
			});

		});
	};
	OnePageNavigation();

	var siteScroll = function() {



		$(window).scroll(function() {

			var st = $(this).scrollTop();

			if (st > 100) {
				$('.js-sticky-header').addClass('shrink');
			} else {
				$('.js-sticky-header').removeClass('shrink');
			}

		}) 

	};
	siteScroll();

});



function isValidEmail(email){
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (email.match(validRegex)) {
        return true;
    } 
    else {
        return false;
    }
}

function isValidPhone(phone){
    var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
    if(phone.match(phoneNum)) {
        return true;
    }
    else {
        return false;
    }
}

function subscribe(){

    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    let e_msg= document.getElementById('email-msg');
    let n_msg= document.getElementById('name-msg');
    let msg= document.getElementById('final-msg');
    e_msg.innerText = "";
    n_msg.innerText = "";
    msg.innerText = "";
    
    var alright = true;
    if(email == "" || !isValidEmail(email)){
        alright = false;
        e_msg.classList.add("error");
        e_msg.innerText = "Email can't be empty or Invalid email";
    }
    if(name == ""){
        alright = false;
        n_msg.classList.add("error");
        n_msg.innerText = "Name can't be empty";
    }
    data_object = {
        email: email,
        name: name
    }
    if(alright){
        send_mail(data_object);
    }
}

function ppc_contact(){

    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;

    let msg= document.getElementById('f-msg');

    msg.innerText = "";
    
    var alright = true;
    if(email == "" || !isValidEmail(email)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty";
    }
    else if(name == ""){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Name can't be empty";
    }
    else if(!isValidPhone(phone)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Invalid Phone";
    }
    data_object = {
        email: email,
        name: name,
        phone: phone
    }
    if(alright){
        send_mail(data_object,'f-msg');
    }
}
function home_contact(){

    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('msg').value;

    let msg= document.getElementById('f-msg');

    msg.innerText = "";
    
    var alright = true;
    if(email == "" || !isValidEmail(email)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty";
    }
    else if(name == ""){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Name can't be empty";
    }
    else if(!isValidPhone(phone)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Invalid Phone Number";
    }
    data_object = {
        email: email,
        name: name,
        phone: phone,
        message:message
    }
    if(alright){
        send_mail(data_object,'f-msg');
    }
}

function analyze_site(){
    const website = document.getElementById('url').value;
    let msg= document.getElementById('analyze-msg');
    msg.innerText = "";
    msg.classList.remove("error");
    msg.classList.remove("success");
    
    var alright = true;
    if(website == "" ){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Website can't be empty";
    }
    data_object = {
        website: website
    }
    if(alright){
        send_mail(data_object,"analyze-msg");
    }    
}

function sign_up(){
    const email = document.getElementById('email_sign_up').value;
    let msg= document.getElementById('final-msg');
    msg.innerText = "";
    msg.classList.remove("error");
    msg.classList.remove("success");
    
    var alright = true;
    if(email == ""  || !isValidEmail(email)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty  or invalid email";
    }
    data_object = {
        email: email
    }
    if(alright){
        send_mail(data_object);
    }
}

function send_contact(){
    const email = document.getElementById('email').value;
    const name = document.getElementById('name').value;
    const website = document.getElementById('website').value;
    const service = document.getElementById('service').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    let msg= document.getElementById('final-msg');
    msg.innerText = "";
    
    var alright = true;
    if(email == "" || !isValidEmail(email)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Email can't be empty or invalid email";
    }
    else if(name == ""){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Name can't be empty";
    }
    else if(!isValidPhone(phone)){
        alright = false;
        msg.classList.add("error");
        msg.innerText = "Invalid Phone Number";
    }
    data_object = {
        phone: phone,
        email: email,
        name: name,
        website : website,
        service : service,
        message : message
    }
    if(alright){
        send_mail(data_object);
    }
}

function send_mail(data_object,id){
    id = id || "final-msg";
    const location = "../backend/mail_API/mail.php";

        axios(
            {
                method: "post",
                url: location,
                data: data_object
            }
        )
        .then(function (response) {
            showMessage(response.data,id);
        })
        .catch(function (error) {
            showMessage("error",id);
        });
}

function showMessage(type,id){
    let msg = document.getElementById(id);
    if(type == "success"){
        msg.classList.add('success');
        msg.innerText = "Thank You. We will contact you shortly";
    }
    else{
        msg.classList.add('error');
        msg.innerText = "An error occured. We are deeply regretted for the inconvinience";
    }
    console.log(type);
}