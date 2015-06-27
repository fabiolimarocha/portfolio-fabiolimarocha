

$(document).ready(function() {

  ExibeMenu();
  Nav_AlternaCor();
  ScrollAncoras();
  CarouselPortfolio();
  VoltarAoTopo();

});

// === script que exibe menu (begin)
function ExibeMenu() {
  $(".nav-menu").on("mouseover", function () {        
    $(".menu").show();
  }).on("mouseout", function () {
    $(".menu").hide();
  });
}
// === script que exibe menu (end)

// === Script para alterar cor do nav menu (begin)
function Nav_AlternaCor(){
  $(window).scroll(function(){
    scroll_page = $(document).scrollTop();
    if (scroll_page > 527){
      $("nav").css("background","#70bfda");
      $("nav ul.menu").css("background","url('imgs/bg-nav-menu-blue.png')").css("border-color","#70bfda");
      $("nav .logo-mini").show();
    }
    else {
       $("nav").css("background","url('imgs/bg-nav.png')");
       $("nav ul.menu").css("background","url('imgs/bg-nav-menu.png')").css("border-color","#fff");
       $("nav .logo-mini").hide();
    }
  }); 
}
// === Script para alterar cor do nav menu  (end)

// === Script ancora do menu (begin) 
function ScrollAncoras(){
   $('.scroll_ancoras').click(function(){
      var alvo = $(this).attr('href').split('#').pop();
      $('html, body').animate({scrollTop: $('#'+alvo).offset().top - 102}, 2000);
      return false;
   });
}
// === Script ancora do menu (end)

// === Carousel Portfolio (begin) 
function CarouselPortfolio(){
  $("#owl-portfolio").each(function() {
    var $this = $(this);
    $this.owlCarousel({
      items : 1,
      responsive: false,
      slideSpeed : 1000,
      pagination : false,
      autoPlay: true
    });
    // Custom Navigation Events
    $this.parent().find(".next").click(function(){
      $this.trigger('owl.next');
    });
    $this.parent().find(".prev").click(function(){
      $this.trigger('owl.prev');
    });
  });
}
// === Carousel Portfolio (end) 

// === Script para voltar ao topo da página (begin) 
function VoltarAoTopo() { 
  $('#voltar-topo').click(function(){ 
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
  });
}
// === Script para voltar ao topo da página (end) 





