	//Check to see if the window is top if not then display button

$(document).ready(function(){

    $('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    var navbar = $(".navbar");


    var scrpos = $('.page-heading, #slider');   
    
    setscrol(scrpos);
    
    $(window).scroll(function() {        
        setscrol(scrpos);
    });

});




function setscrol(scrpos) {

    if(scrpos == undefined) return;

    if($(this).scrollTop() > scrpos.height() - $(".navbar").height()){
        $(".navbar").addClass('sticky');
        $(".navbar").removeClass('navbar-dark').addClass('navbar-light');
    }
    else{
        $(".navbar").removeClass('sticky');
        $(".navbar").removeClass('navbar-light').addClass('navbar-dark');
    }
}





/*---------------- Navbar Scroll ---------------*/
/* if ($(window).width() > 992) {
    $(window).scroll(function(){  
       if ($(this).scrollTop() > 40) {
          $('#navbar').addClass("fixed-top");
          // add padding top to show content behind navbar
          $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
          $('#navbar').removeClass("fixed-top");
           // remove padding top from body
          $('body').css('padding-top', '0');
        }   
    });
  } */

 