//hamburger animation
$('.open').click(function(){
    $('.bar-one').toggleClass('bar-one-open');

    $('.bar-two').toggleClass('bar-two-open');

    $('.bar-three').toggleClass('bar-three-open');
});
$('.open-form').click(function(){
    $('.search-form').css({
        'width' : '100%',
        'height' : '100%'
    });
    $('.search').css({
        'height' : '183px'
    });
    $(this).css({
        'display': 'none'
    })
});

//open gallery image modal

$('.gallery-item').click(function(){
    $(this).toggleClass('image-opened');
});

//image auto change on image selection
$('.gallery-inner input').change(function(){
    $(this).parent().parent().css({ 
        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
        'background-size': 'cover',
        'background-position': 'center',
        'backgroung-repeat': 'no-repeat'
         })
});

$('#profile_image').change(function(){
    $('.profile-image').css({ 
        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
        'background-size': 'cover',
        'background-position': 'center',
        'backgroung-repeat': 'no-repeat'
         })
});


$('#banner_image').change(function(){
    $('.banner').css({ 
        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
        'background-size': 'cover',
        'background-position': 'center',
        'backgroung-repeat': 'no-repeat'
         })
});

$('#show-banner').change(function(){
    $('.show-banner').css({ 
        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ') !important',
        'background-size': 'cover',
        'background-position': 'center',
        'backgroung-repeat': 'no-repeat'
         });
});

//open review form

$('.open-reviews-form').click(function(){
    $('.review-form').toggleClass('review-form-opened');
    $(this)
        .toggleClass('open-reviews-form-cont')
        .toggleClass('open-reviews-form-x')
        .toggleClass('btn-danger');

});

//open all reviews list

$('.open-all-reviews').click(function(){
    $('.all-reviews-cont').css({
        'left' : '0px',
    });
});

$('.exit-reviews').click(function(){
    $('.all-reviews-cont').css({
        'left' : '-200vw',
    });    
});

$('.review-stars').each(function(){
    console.log('hi');
});

//------ MAKE SURE THESE SCRIPTS ARE LAST!!! -----//

//handle venue amenities --- src from:  http://jsfiddle.net/Lf6ky/190/

    var checkBox = $('.amenities-checkbox');
    var amenitiesInput = $('#amenities-input');
    checkBox.on('change', function(){
        var string = checkBox.filter(":checked").map(function(i, v){
            return this.value;
        }).get().join(', ');
        amenitiesInput.val(string);
    }); 

    var locationInput = (document.querySelector('.location-input'));;

    var autocomplete = new google.maps.places.Autocomplete(locationInput);

    //autocomplete.bindTo('bounds', map);

    /*$checks = $(":checkbox");
    $checks.on('change', function() {
        var string = $checks.filter(":checked").map(function(i,v){
            return this.value;
        }).get().join(" ");
        $('#field_results').val(string);
    });*/







