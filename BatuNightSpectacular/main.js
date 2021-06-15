$(document).ready(function(){
    // video popup 
    const videoSrc = $("#player-1").attr("src");
    $(".play-button, .video-popup-close").on("click", function(){
        if($(".video-popup").hasClass("open")){
            $(".video-popup").removeClass("open");
            $("#player-1").attr("src","");
        }
        else{
            $(".video-popup").addClass("open");
            if($("#player-1").attr("src")==''){
                $("#player-1").attr("src",videoSrc);
            }
        }
    });
});

$(document).ready(function(){

    $(window).scroll(function(){
        if($(this).scrollTop() > 40){
            $('#topBtn').fadeIn();
        } else{
            $('#topBtn').fadeOut();
        }
    });

    $('#topBtn').click(function(){
        $('html, body').animate({scrollTop : 0},700);
    });
});


$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cs-hidden');
        } 
    });  
  });


//   const btn = document.querySelector('.play-button');

//   const videoContainer = document.querySelector('.video-popup');

//   const close = document.querySelector('.video-popup-close');

//   btn.addEventListener('click', ()=>{
//       videoContainer.classList.add('open');
//   });

//   close.addEventListener('click',()=>{
//     videoContainer.classList.remove('open');
//   });
