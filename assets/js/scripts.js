$(document).ready(function(){
    if ($.cookie('username')) {
        let username = $.cookie('username');
        $('.logged-in .login').html(`Hi, <strong>${username}!</strong>`).attr('onclick', 'location.href="/logout.php"');
    }else{
        $('.login').attr('onclick', 'location.href="/login.php"');
    }
    

    let modalForm = $('.modal-login');
    let overlay = $('.overlay');
    let videoUrl = $('.video-inner iframe').attr('src');
    
    // $('.login').on('click', function (){
    //     //e.preventDefault()
    //     modalForm.fadeIn(400);
    //     overlay.fadeIn(400);
    // })
    overlay.on('click', function (){
        modalForm.fadeOut(400);
        overlay.fadeOut(400);
        formPopup.fadeOut(400);
        $('.video-inner iframe').attr('src', videoUrl);
    })
    $('.close-button').on('click',function (){
        modalForm.fadeOut(400);
        overlay.fadeOut(400);
    })
    
    $('.video-button').on('click', function(){
        overlay.fadeIn(400);
        $('.video-modal').fadeIn(400);
    })
    
    jQuery('.classes-row').slick({
        infinite:true,
        slidesToShow:3,
        dots:true,
        arrows:false,
        margin:20,
    });

    // let form = $('.form');
    // let formPopup = $('.form-popup');
    // form.on('submit', function(e){
    //     e.preventDefault();
    //     formPopup.find('.name-value').html($('#name').val());
    //     formPopup.find('.email-value').html($('#email').val());
    //     formPopup.find('.phone-value').html($('#phone').val());
    //     //formPopup.find('.course-value').html($('#name').val());
    //     overlay.fadeIn(400);
    //     formPopup.fadeIn(400);

    // });

    //input image preview
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            imgPrev.src = URL.createObjectURL(file);
        }
    }

});

