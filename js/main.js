
// wow

new WOW().init();





//navbar-toggle x icon....

$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});



 //button up

	$(document).ready(function(){
 var btnUp = $('<div/>', {'class':'btntoTop'});
    btnUp.appendTo('body');
    $(document)
        .on('click', '.btntoTop', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });

    $(window)
        .on('scroll', function() {
            if ($(this).scrollTop() > 200)
                $('.btntoTop').addClass('active');
            else
                $('.btntoTop').removeClass('active');
        });
        });



   //tooltip
   
 $(function(){
   
   $('[data-toggle="tooltip"]').tooltip();
   
   })
   
   document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("partner-carousel");
    const logos = carousel.children;
    const logoWidth = logos[0].offsetWidth + 20; // width + margin
    let position = 0;
  
    // Clone first few logos to loop infinitely
    for (let i = 0; i < 3; i++) {
      const clone = logos[i].cloneNode(true);
      carousel.appendChild(clone);
    }
  
    setInterval(() => {
      position++;
      carousel.style.transform = `translateX(-${logoWidth * position}px)`;
  
      if (position >= logos.length - 3) {
        setTimeout(() => {
          carousel.style.transition = "none";
          position = 0;
          carousel.style.transform = `translateX(0px)`;
          setTimeout(() => {
            carousel.style.transition = "transform 0.5s ease-in-out";
          }, 50);
        }, 500);
      }
    }, 2000);
  });
  