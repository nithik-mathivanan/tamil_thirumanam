const swiper1 = new Swiper(".swiper-1", {
  centeredSlides: true,
  autoplay: {
	delay: 5000,
	disableOnInteraction: false,
  },
  pagination: {
	el: ".swiper-pagination",
	clickable: true,
  },
  navigation: {
	nextEl: ".swiper-button-next",
	prevEl: ".swiper-button-prev",
  }
});

const swiper2 = new Swiper(".swiper-2", {
  centeredSlides: true,
  autoplay: {
	delay: 5000,
	disableOnInteraction: false,
  },
  pagination: {
	el: ".swiper-pagination",
	clickable: true,
  },
  navigation: {
	nextEl: ".swiper-2 .swiper-button-next",
	prevEl: ".swiper-2 .swiper-button-prev",
  }
});

$('#gender').focus(function() {
  $('.gender-dropdown').show();
});

$('.home .navbar-nav li:nth-child(2) a').click(function() {
  $(window).scrollTop($('#home-section-2').offset().top - $('.navbar').outerHeight() - parseInt($('#home-section-2').css('padding-top').split('px')[0]));
});

$('.gender-dropdown a:first-child').click(function() {
  $('#gender').val($(this).text());
  $('.gender-dropdown').hide();
});

$('.gender-dropdown a:last-child').click(function() {
  $('#gender').val($(this).text());
  $('.gender-dropdown').hide();
});

var header = $('.navbar');
var sticky = header.offset().top;


if (window.scrollY > sticky) {
  header.addClass("sticky");
} else {
  header.removeClass("sticky");
}

$(window).scroll(function() {

  if (window.scrollY > sticky) {
    header.addClass("sticky");
  } else {
    header.removeClass("sticky");
  }
});

AOS.init();

$('.form-inner-2 .categories-link').click(function() {
  $('.pay-now-container').removeClass('active');
  $('.form-inner-2 .categories-link').removeClass('active');
  $('#' + $(this).attr('data-target')).addClass('active');
  $(this).addClass('active');
});

$('.categories-link').click(function() {
  $('.schemes-list-container').removeClass('active');
  $('.categories-link').removeClass('active');
  $('#' + $(this).attr('data-target')).addClass('active');
  $(this).addClass('active');
});



$('.iti__country').click(function() {
  localStorage.setItem('dial-code', $('.iti__highlight > .iti__dial-code').text().split('(')[0]);
});

// $('.registration #registration-form .submit').click(function() {
  // var getForm = $(this).closest('form').attr('class').split(" ")[0];
  // if(getForm == 'form-1') {
    // $(this).closest('form').removeClass('active');
    // $('.form-2').addClass('active');
    // $('.left-container img').attr('src','images/form-img-1.png');
  // } 
  // else if(getForm == 'form-2') {
    // $(this).closest('form').removeClass('active');
    // $('.form-3').addClass('active');
    // $('.left-container img').attr('src','images/form-img-4.png');
  // }
  // else if(getForm == 'form-3') {
    // $(this).closest('form').removeClass('active');
    // $('.form-4').addClass('active');
    // $('.left-container img').attr('src','images/form-img-5.png');
  // }
  // else if(getForm == 'form-4') {
    // alert('Registraton Successful');
    // window.location.href = "index.html";
  // }
// });
// Home Registration

$('.home #register-form').submit(function(e) {

  e.preventDefault();

  var phoneNo = localStorage.getItem('dial-code')+' '+$('#phone').val();

  $.ajax({
    type: 'post',
    url: 'post-data.php',
    data: $(this).serialize(),
    success: function (res) {
        localStorage.setItem("relation", res);
		    localStorage.setItem("gender", $('#gender').val());
        localStorage.setItem("phone_number", phoneNo);
        $('#gender').val("");
        $('#cname').val("");
        $('#phone').val("");
        $('#email').val("");
        $('#createdby').val("");
        window.location.href="registration.html";
    }
    
  });
});


$('.registration #registration-form.form-1').submit(function(e) {

  e.preventDefault();
  
	$(this).closest('form').removeClass('active');
	$('.form-2').addClass('active');
	$('.left-container img').attr('src','images/form-img-1.png');

  $.ajax({
    type: 'post',
    url: 'post-data.php',
    data: $(this).serialize() + '&form_no=form-1',
    success: function (res) {
        //alert(res);
        // $('#gender').val("");
        // $('#cname').val("");
        // $('#phone').val("");
        // $('#email').val("");
        // $('#createdby').val("");
        // localStorage.setItem("relation", res);
        // window.location.href="registration.html";
    }
    
  });
});


$('.registration #registration-form.form-2').submit(function(e) {

  e.preventDefault();
  
  $(this).closest('form').removeClass('active');
	$('.form-3').addClass('active');
	$('.left-container img').attr('src','images/form-img-4.png');

  $.ajax({
    type: 'post',
    url: 'post-data.php?form-2',
    data: $(this).serialize() + '&form_no=form-2',
    success: function (res) {
        //alert(res);
        // $('#gender').val("");
        // $('#cname').val("");
        // $('#phone').val("");
        // $('#email').val("");
        // $('#createdby').val("");
        // localStorage.setItem("relation", res);
        // window.location.href="registration.html";
    }
    
  });
});


$('.registration #registration-form.form-3').submit(function(e) {

  e.preventDefault();
  
  $(this).closest('form').removeClass('active');
	$('.form-4').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
  $.ajax({
    type: 'post',
    url: 'post-data.php?form-3',
    data: $(this).serialize() + '&form_no=form-3',
    success: function (res) {
        //alert(res);
        // $('#gender').val("");
        // $('#cname').val("");
        // $('#phone').val("");
        // $('#email').val("");
        // $('#createdby').val("");
        // localStorage.setItem("relation", res);
        // window.location.href="registration.html";
    }
    
  });
});

$('.registration #registration-form.form-4').submit(function(e) {

  e.preventDefault();
  
	// var x = document.getElementById("snackbar");
	// x.className = "show";

  $(this).closest('form').removeClass('active');
	$('.form-5').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-4',
    data: $(this).serialize() + '&form_no=form-4',
    success: function (res) {
        //alert(res);
        // $('#gender').val("");
        // $('#cname').val("");
        // $('#phone').val("");
        // $('#email').val("");
        // $('#createdby').val("");
        // localStorage.setItem("relation", res);
        // window.location.href="registration.html";
		// setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    });
	
	// setTimeout(function(){ window.location.href="index.html"; }, 3000);
  
});

$('.form-5').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-inner-1').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-5',
    data: $(this).serialize() + '&form_no=form-5',
    success: function (res) {
        $('.reg-id').text(res);
        $('#otp').val(localStorage.getItem('phone_number'));
        $('.get-phone').text(localStorage.getItem('phone_number'));
    }
  });
  
});

$('.edit_phone').click(function() {
  $('#otp').focus();
});


$('.form-inner-1').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-inner-2').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	// $.ajax({
  //   type: 'post',
  //   url: 'post-data.php?form-inner-1',
  //   data: $(this).serialize() + '&form_no=form-inner-1',
  //   success: function (res) {

  //   }
  //   });
  
});

$('.form-inner-2').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-inner-3').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	// $.ajax({
  //   type: 'post',
  //   url: 'post-data.php?form-inner-1',
  //   data: $(this).serialize() + '&form_no=form-inner-1',
  //   success: function (res) {

  //   }
  //   });
  
});

$('.input-group-text').click(function() {
  $('#fileToUpload').css('visibility', 'visible');
});


$('.form-inner-3').submit(function(e) {

//   e.preventDefault();

  // $(this).closest('form').removeClass('active');
	// $('.form-inner-4').addClass('active');
	// $('.left-container img').attr('src','images/form-img-5.png');
  //alert('yes');
  
	// $.ajax({
  //   type: 'post',
  //   url: 'upload.php?uploaded=yes',
  //   data:  new FormData(this),
  //   contentType: false,
  //   cache: false,
  //   processData: false,
  //   success: function (res) {
  //       alert(res);
  //   }
  //   });
  
});

$('.add-photo').click(function() {
  $(this).closest('form').removeClass('active');
  $('.form-inner-3').addClass('active');
});

$('.form-inner-4').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-6').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	// $.ajax({
  //   type: 'post',
  //   url: 'post-data.php?form-inner-1',
  //   data: $(this).serialize() + '&form_no=form-inner-1',
  //   success: function (res) {

  //   }
  //   });
  
});

$('.form-6').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-7').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-6',
    data: $(this).serialize() + '&form_no=form-6',
    success: function (res) {

    }
    });
  
});

$('.form-7').submit(function(e) {

  e.preventDefault();

  $(this).closest('form').removeClass('active');
	$('.form-8').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-7',
    data: $(this).serialize() + '&form_no=form-7',
    success: function (res) {
      
    }
    });
  
});

$('.form-8').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;

  $(this).closest('form').removeClass('active');
	$('.form-9').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-8&fulldate='+fulldate,
    data: $(this).serialize() + '&form_no=form-8',
    success: function (res) {
      
    }
    });
  
});

$('.form-9').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;

  alert(fulldate);
  $(this).closest('form').removeClass('active');
	$('.form-10').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-9',
    data: $(this).serialize() + '&form_no=form-9&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.form-10').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-11').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-10',
    data: $(this).serialize() + '&form_no=form-10&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.form-11').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-12').addClass('active');
  $('.left-image-container').hide();
  $('.left-preferences-container').show();
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-11',
    data: $(this).serialize() + '&form_no=form-11&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.form-12').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-13').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-12',
    data: $(this).serialize() + '&form_no=form-12&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.partner-link').click(function(){
  $('form').removeClass('active');
  $('.' + $(this).attr('data-target') + '').addClass('active');
});

$('.form-13').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-14').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-13',
    data: $(this).serialize() + '&form_no=form-13&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.form-14').submit(function(e) {

  e.preventDefault();

  $('.left-image-container').show();
  $('.left-preferences-container').hide();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-15').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	$.ajax({
    type: 'post',
    url: 'post-data.php?form-14',
    data: $(this).serialize() + '&form_no=form-14&fulldate='+fulldate,
    success: function (res) {
      
    }
    });
  
});

$('.form-15').submit(function(e) {

  e.preventDefault();

  const dt = new Date();
  const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);

  const fulldate = `${
      padL(dt.getFullYear())}-${
      padL(dt.getMonth()+1)}-${
      dt.getDate()} ${
      padL(dt.getHours())}:${
      padL(dt.getMinutes())}:${
      padL(dt.getSeconds())}`;
  $(this).closest('form').removeClass('active');
	$('.form-16').addClass('active');
	$('.left-container img').attr('src','images/form-img-5.png');
  
	// $.ajax({
  //   type: 'post',
  //   url: 'post-data.php?form-15',
  //   data: $(this).serialize() + '&form_no=form-15&fulldate='+fulldate,
  //   success: function (res) {
      
  //   }
  //   });
  
});


$('.later-button').click(function() {
  $(this).closest('form').removeClass('active');
  $('.form-11').addClass('active');
});

$('.add-preferences').click(function() {
  $(this).closest('form').removeClass('active');
  $('.form-14').addClass('active');
});

$('.help-me-text').click(function() {
  $(this).prev().prev().val('');
  $(this).prev().prev().val("I am making this profile for my son. He completed his bachelor's degree and is now working as a software professional. We belong to an upper middle class, joint family with traditional values, currently settled in Singapore.");
  $('.text-count b').text($(this).prev().prev().val().length);
});

$('.textbox-container textarea').keyup(function() {
  $('.text-count b').text($(this).val().length);
});








