/*-----------------------------------------
 [MASTER STYLE SHEET]
 * THEME NAME - Wedding Matrimony HTML5 Template
 * Author: RN53 Themes
 * Descriptios: Wedding Matrimony HTML5 Template. Can be Used For Various Perposes.
 * Version: v1
 -----------------------------------------------*/

$(document).ready(function () {
    "use strict";

    //MOBILE MENU HIDE AND SHOW
    $('.desk-menu').on('click', function () {
        $('.menu-pop1, .pop-bg').addClass('act');
    });
    $('.menu-pop-clo').on('click', function () {
        $('.menu-pop, .pop-bg').removeClass('act');
    });
    //MOBILE MENU HIDE AND SHOW
    $('.pop-bg').on('click', function () {
        $('.pop-bg, .menu-pop, .mob-me-all').removeClass('act');
        $("body").css('overflow', 'visible');
    });
    //ON LOAD START ANIMATIONS
    $('.ban-wedd').addClass('anistart');

    //SHAREPOPUP
    $('.shar-1 .fa-share-alt').on('click', function () {
        $(this).toggleClass("act");
    });

    //SHARE URL
    var _cururl = window.location.href;
    $("#shareurl").val(_cururl);

    //AGENT WINDOW OPEN
    $('.head-pro').on('click', function () {
        $('.menu-pop2, .pop-bg').addClass('act');
    });
    $('.ser-open').on('click', function () {
        $('.pop-search').show();
    });
    $('.ser-clo').on('click', function () {
        $('.pop-search').hide();
        $('.pop-bg').removeClass('act');
    });

    /*$('.mobile-menu').on('click', function () {
        $('.pop-bg, .mob-me-all').addClass('act');
        $("body").css('overflow','hidden');
    });*/
    $('.mob-menu span').on('click', function () {
        var _Mobil = $(this).attr("data-mob");
        $("." + _Mobil + "_menu").addClass('act');
        $('.pop-bg').addClass('act');
        $("body").css('overflow', 'hidden');
    });
    $('.mob-me-clo').on('click', function () {
        $('.mob-me-all, .pop-bg').removeClass('act');
        $("body").css('overflow', 'visible');
    });

    //FILTER ON ALL LISTING PAGE - MOBILE VIEW ONLY
    $('.fil-mob').on('click', function () {
        $('.fil-mob-view').slideDown();
    });
    $('.filter-clo').on('click', function () {
        $('.fil-mob-view').slideUp();
    });

    //CHOOSEN SELECT
    var _cform = $(".cform");
    if (_cform.length > 0) {
        $(function () {
            $(".fvali").validate();
        });
    }


    //BOOTSTRAP TOOL TIP
    //$('[data-toggle="tooltip"]').tooltip();

    //ENQUIRY AND REVIEW LIKE
    $(".enq-sav i").on('click', function () {
        $(this).toggleClass('sav-act');
    });

    //ENQUIRY AND REVIEW LIKE
    $(".ldelik").on('click', function () {
        $(this).toggleClass('sav-act');
    });

    //HOME PAGE BANNER BG SLIDER HEIGHT SET
    if ($(window).width() < 1250) {
        var _homSerHei = $(".hom-head").outerHeight();
        $(".ban-sli li div img").css("height", _homSerHei + 70 + "px");
    }

    //PROFILE PAGE GET NAME AND IMAGE
    $(".cta-sendint, .cta-chat").on('click', function () {
        var _proname = $(this).parent().siblings(".s2").find("h1").text();
        var _proimg = $(this).parent().siblings(".s1").find("img").attr("src");
        $(".intename1").text(_proname);
        $(".intephoto1").attr("src", _proimg);

        var _pronameall = $(this).parent().siblings("h4").find("a").text();
        var _proimgall = $(this).parent().parent().siblings(".pro-img").find("img").attr("src");
        $(".intename2").text(_pronameall);
        $(".intephoto2").attr("src", _proimgall);
    });

    //CHAT WINDOW AVAILABLE STATUS
    $(".cta-chat").on('click', function () {
        var _avlsts = $(this).parent().parent().parent(".all-pro-box").attr("data-useravil");
        var _avltxt = $(this).parent().parent().parent(".all-pro-box").attr("data-aviltxt");
        $(".avlsta").removeClass("avilyes avilno");
        $(".avlsta").addClass(_avlsts);
        $(".avlsta").text(_avltxt);
    });

    //CHAT WINDOW OPEN
    $(".cta-chat").on('click', function () {
        $(".chatbox").addClass("open")
    });
    //CHAT WINDOW CLOSE
    $(".comm-msg-pop-clo").on('click', function () {
        $(".chatbox").removeClass("open")
    });

    //COPY RIGHTS YEAR
    $('#cry').text("2023");

    //PRE LOADING
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

    //GALLERY IMAGE PATH GET & SET TO A TAG
    $(".img-wrapper a").each(function () {
        var _galImgPath = $(this).children("img").attr("src");
        $(this).attr("href", _galImgPath);
    })

    //VIDEO PAGE VIDEO PLAY
    $(".vid-play").on('click', function () {
        $(".vid-play, .wedd-vid img").hide();
        $(".wedd-vid iframe").show();
        var _getVid = $(this).attr("data-video");
        $(".wedd-vid iframe").attr("src", _getVid);
    });

    //PROFILE SORT
    $(".sort-grid").on('click', function () {
        $(".sort-grid").removeClass("act");
        $(this).addClass("act");
    });
    $(".sort-grid-2").on('click', function () {
        $(".all-list-sh").removeClass("view-grid");
    });
    $(".sort-grid-1").on('click', function () {
        $(".all-list-sh").addClass("view-grid");
    });

    //TOOL TIP
    $('[data-toggle="tooltip"]').tooltip();

    //CHOOSEN SELECT
    var _chosel = $(".chosenini");
    if (_chosel.length > 0) {
        $(function () {
            //$('.chosen-select').chosen();
            $('.chosen-select').chosen({
                placeholder_text_single: "Select Project/Initiative...",
                no_results_text: "Oops, nothing found!"
            });
        });
    }
});

var s = $(".hom-top");
$(window).scroll(function () {
    //HOME TOP MENU FIX
    var windowpos = $(window).scrollTop();
    if (windowpos >= 200) {
        s.addClass("act");
    } else {
        s.removeClass("act");
    }

    //VIDEO PAGE BANNER ANIMATION
    var _wtpx = "-" + windowpos / 3 + "px";
    var _wtpx1 = windowpos / 3 + "px";
    $(".wedd-vid-tre-1").css({
        transform: 'translateX(' + _wtpx + ')'
    });
    $(".wedd-vid-tre-2").css({
        transform: 'translateX(' + _wtpx1 + ')'
    });
});

//HOME PAGE - ON SCROLL ANIMATION
$(window).scroll(function () {
    var windowpos1 = $(window).scrollTop();
    //ANIMATE ADD CLASS
    $(".animate").each(function () {
        var _anisec = $(this).offset().top + $(this).outerHeight() - 10;
        var _whei = $(window).scrollTop() + $(window).height();
        var _aniname = $(this).attr("data-ani");
        var _anidely = $(this).attr("data-dely");
        if (_whei >= _anisec) {
            $(this).addClass(_aniname);
            $(this).addClass("anistart");
            $(this).css("animation-delay", _anidely + "s");
        }
    });
    //HOME PAGE ANIMATION
    if ($(".home-about, .count").length) {
        var _homfotban = $(".count").offset().top - 350;
        if (windowpos1 >= _homfotban) {
            $(".count").addClass("act");
        }
    }

});

//SHARE URL COPY & PASTE
function shareurl() {
    var copyText = document.getElementById("shareurl");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied";
}

function shareurlout() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copy to clipboard";
}

//IF THIS(.slid-inn) CLASS NAME AVAILABE ANY PAGE AFTER ONLY BELOW SLIDER SCRIPT RUNS
var $lis = $('.slid-inn');
if ($lis.length > 0) {
    //COMMON SLIDER
    $('.slider3').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false
            }
        }]

    });

    //HOME PAGE WRECENT COUPLES
    $('.couple-sli').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false
                }
            }
        ]

    });
    //HOME PAGE BANNER SLIDER
    $('.ban-sli').slick({
        infinite: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 6000
    });

    //HOME PAGE WRECENT COUPLES
    $('.hom-qui-acc-sli').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: false
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    arrows: false
                }
            }
        ]

    });

}

let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("image_show");
let numOfFiles = document.getElementById("num-of-files");

function previewimage()
{
    imageContainer.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figcap = document.createElement('figcap');
        
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.appendChild(figcap);
            figure.insertBefore(img,figcap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

 function validateDate() {
        var selectedDate = new Date(document.getElementById('dob').value);
        var today = new Date();
        var age = today.getFullYear() - selectedDate.getFullYear();
        var selectedDateThisYear = new Date(today.getFullYear(), selectedDate.getMonth(), selectedDate.getDate());

        if (selectedDateThisYear > today) {
            age--;
        }

        if (age < 18) {
            document.getElementById('error-message').style.display = 'block';
            document.getElementById('age-input').value = '';
        } else {
            document.getElementById('error-message').style.display = 'none';
            document.getElementById('age-input').value = age;
        }
        
    }


function calculateBMI() {
            // Get weight and height input values
            var weight = parseFloat(document.getElementById('weight').value);
            var height = parseFloat(document.getElementById('height').value);
            
            // Check if weight and height are valid numbers
            if (isNaN(weight) || isNaN(height)) {
                document.getElementById('bmi').value = ""; // Clear BMI if weight or height is invalid
                return; // Exit function
            }
            
            // Calculate BMI
            var bmi = weight / (height / 100 * height / 100);

            // Display the BMI value
            document.getElementById('bmi').value = bmi.toFixed(2);

            var category;
            if (bmi < 18.5) {
                category = "Underweight";
                document.getElementById('bmiCategory').className = "underweight";
            } else if (bmi >= 18.5 && bmi < 25) {
                category = "Normal weight";
                document.getElementById('bmiCategory').className = "normal";
            } else if (bmi >= 25 && bmi < 30) {
                category = "Overweight";
                document.getElementById('bmiCategory').className = "overweight";
            } else {
                category = "Obese";
                document.getElementById('bmiCategory').className = "obese";
            }

            // Display the BMI category
            document.getElementById('bmiCategory').innerText = "Category: " + category;
        }

function populateCurrencyOptions() {
            var currencies = [
                "AFN","AED","ALL","AMD","ANG","AOA","ARS","AUD","AWG","AZN",
                "BAM","BBD","BDT","BGN","BHD","BIF","BMD","BND","BOB","BRL",
                "BSD","BTC","BTN","BWP","BYN","BYR","BZD","CAD","CDF","CHF",
                "CLF","CLP","CNY","COP","CRC","CUC","CUP","CVE","CZK","DJF",
                "DKK","DOP","DZD","EGP","ERN","ETB","EUR","FJD","FKP","GBP",
                "GEL","GGP","GHS","GIP","GMD","GNF","GTQ","GYD","HKD","HNL",
                "HRK","HTG","HUF","IDR","ILS","IMP","INR","IQD","IRR","ISK",
                "JEP","JMD","JOD","JPY","KES","KGS","KHR","KMF","KPW","KRW",
                "KWD","KYD","KZT","LAK","LBP","LKR","LRD","LSL","LTL","LVL",
                "LYD","MAD","MDL","MGA","MKD","MMK","MNT","MOP","MRO","MUR",
                "MVR","MWK","MXN","MYR","MZN","NAD","NGN","NIO","NOK","NPR",
                "NZD","OMR","PAB","PEN","PGK","PHP","PKR","PLN","PYG","QAR",
                "RON","RSD","RUB","RWF","SAR","SBD","SCR","SDG","SEK","SGD",
                "SHP","SLL","SOS","SRD","STD","SVC","SYP","SZL","THB","TJS",
                "TMT","TND","TOP","TRY","TTD","TWD","TZS","UAH","UGX","USD",
                "UYU","UZS","VEF","VND","VUV","WST","XAF","XAG","XAU","XCD",
                "XDR","XOF","XPF","YER","ZAR","ZMK","ZMW","ZWL"
            ];

            var select = document.getElementById('fromCurrency');

            // Clear existing options
            select.innerHTML = '';

            currencies.forEach(function(currency) {
                var option = document.createElement('option');
                option.value = currency;
                option.textContent = currency;
                select.appendChild(option);
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
            populateCurrencyOptions();
        });


        function updateBrothersMarriedOptions() {
            var countBrothers = parseInt(document.getElementById('countBrothers').value);
            var marriedBrothersSelect = document.getElementById('marriedBrothers');

            // Clear existing options
            marriedBrothersSelect.innerHTML = '';

            // Populate options for married brothers
            for (var i = 0; i <= countBrothers; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.textContent = i;
                marriedBrothersSelect.appendChild(option);
            }
        }

        // Function to update options for married sisters
        function updateSistersMarriedOptions() {
            var countSisters = parseInt(document.getElementById('countSisters').value);
            var marriedSistersSelect = document.getElementById('marriedSisters');

            // Clear existing options
            marriedSistersSelect.innerHTML = '';

            // Populate options for married sisters
            for (var i = 0; i <= countSisters; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.textContent = i;
                marriedSistersSelect.appendChild(option);
            }
        updateBrothersMarriedOptions();
        updateSistersMarriedOptions();
        }

        // Call the functions initially to populate options based on default selections
        


        const birthDateInput = document.getElementById("birthDate");
    const birthTimeInput = document.getElementById("birthTime");
    const zodiacSignInput = document.getElementById("zodiacSign");
    const nakshatraInput = document.getElementById("nakshatra");

    // Event listener for input change on birth date and time
    birthDateInput.addEventListener("input", updateZodiacSign);
    birthTimeInput.addEventListener("input", updateNakshatra);

    // Function to determine zodiac sign based on birth date
    function getZodiacSign(birthDate) {
        // Define zodiac signs and their date ranges
        const zodiacSigns = [
            { name: "Capricorn", start: "01-01", end: "01-19" },
            { name: "Aquarius", start: "01-20", end: "02-18" },
            { name: "Pisces", start: "02-19", end: "03-20" },
            { name: "Aries", start: "03-21", end: "04-19"},
            { name: "Taurus", start: "04-20", end: "05-20"},
            { name: "Gemini", start: "05-21", end: "06-20"},
            { name: "Cancer", start: "06-21", end: "07-22"},
            { name: "Leo", start: "07-23", end: "08-22"},
            { name: "Virgo", start: "08-23", end: "09-22"},
            { name: "Libra", start: "09-23", end: "10-22"},
            { name: "Scorpio", start: "10-23", end: "11-21"},
            { name: "Sagittarius", start: "11-22", end: "12-21"},
            // Add other zodiac signs here...
        ];

        // Extract the month and day from the birth date
        const monthDay = birthDate.slice(5); // Exclude year from date string

        // Find the corresponding zodiac sign
        for (const sign of zodiacSigns) {
            if (monthDay >= sign.start && monthDay <= sign.end) {
                return sign.name;
            }
        }

        return null; // Return null if no matching sign is found
    }

    // Function to determine nakshatra based on birth time
    function getNakshatra(birthTime) {
        // Define nakshatras
        const nakshatras = [
            "Ashwini", "Bharani", "Krittika", "Rohini", "Mrigashira",
            "Ardra", "Punarvasu", "Pushya", "Ashlesha", "Magha",
            "Purva Phalguni", "Uttara Phalguni", "Hasta", "Chitra",
            "Swati", "Vishakha", "Anuradha", "Jyeshtha", "Mula",
            "Purva Ashadha", "Uttara Ashadha", "Shravana", "Dhanishta",
            "Shatabhisha", "Purva Bhadrapada", "Uttara Bhadrapada", "Revati"
            // Add other nakshatras here...
        ];

        // Split the birth time into hours and minutes
        const [hours, minutes] = birthTime.split(":");
        
        // Convert hours and minutes to decimal hours
        const decimalHours = parseInt(hours) + parseInt(minutes) / 60;
        
        // Calculate the nakshatra index based on the decimal hour
        const nakshatraIndex = Math.floor((decimalHours / 24) * nakshatras.length);

        return nakshatras[nakshatraIndex];
    }

    // Function to update zodiac sign input
    function updateZodiacSign() {
        const zodiacSign = getZodiacSign(birthDateInput.value);
        zodiacSignInput.value = zodiacSign ? zodiacSign : "Unknown";
    }

    // Function to update nakshatra input
    function updateNakshatra() {
        const nakshatra = getNakshatra(birthTimeInput.value);
        nakshatraInput.value = nakshatra ? nakshatra : "Unknown";
    }