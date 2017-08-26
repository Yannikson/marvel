/* Autor: Ondaweb | Comunicação Digital */
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
var viewport = updateViewportDimensions();
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();
var timeToWaitForLast = 100;
function loadGravatars() {
  viewport = updateViewportDimensions();
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function
/* Ondaweb regular jQuery */
jQuery(document).ready(function($) {

  // FADE LOAD PAGE
    $("body").css("display", "none");
     $("body").fadeIn('slow');
  // end.

  // AJUSTE DO TAMANHO DO BANNER
    function ajusta_tela(){
      var altura_da_tela = $(window).height() + 20;
      $('#banner-principal, #area-dois').css({ height: altura_da_tela}); 
    }

    ajusta_tela();

    $(window).resize(function() {
      ajusta_tela();
    });
  // end.

  // ANIMA MENU
   $('#button-down').click(function(e){
        var anchor = $(this).attr('href');
        var marginTop = 80;
        var top = $(anchor).offset().top - marginTop;
        $('body').animate({ scrollTop: top }, 'slow');
    });
  // end.

   $('.parallax').each(function() {
        var $obj = $(this);

        $(window).scroll(function() {
            var offset = $obj.offset();
            var yPos = -($(window).scrollTop() - offset.top) / $obj.data('speed');
            var bgpos = '50% ' + yPos + 'px';
            $obj.css('background-position', bgpos);
        });
    });

    $('.seta-topo').click(function () {
      $("html, body").animate({scrollTop: 0}, '1000', 'swing');
    });

  // SHOW E HIDE 
     /*$('.abre-post').on('click', function(e){
        if($(this).hasClass('active') ){
          $(this).removeClass('active').parent().find('.content-post').slideUp();
        } else {
            $('.abre-post').removeClass('active');
            $('.content-post').slideUp();
            $(this).addClass('active');
            $(this).parent().find('.content-post').slideDown();
        }
      });*/
  // end.
   
  // PLACEHOLDER  
    $('.placeholder input, .placeholder textarea').each(function(){
      var dataName;
      dataName = $(this).attr('data-name');
      $(this).before('<span>' + dataName + '</span>');
    });

    $('.placeholder input').parent().each(function () {  // busca o span e o input e adiciona a div
      $(this).find('span, input').wrapAll('<div class="styleInput" />')            
    });

    $('.placeholder textarea').parent().each(function () { // busca o span e o input e adiciona a div
      $(this).find('span, textarea').wrapAll('<div class="styleInput" />')            
    });
    
    $('.styleInput').click(function(){ 
      $(this).find('input, textarea').focus();
    });

    $('.styleInput input, .styleInput textarea').focus(function(){
      $(this).parent().find('span').hide();
    });

    $('.styleInput input, .styleInput textarea').blur(function(){
      if($(this).val() == '' || $(this).val() == '__/__/____' || $(this).val() == '___.___.___-__' || $(this).val() == '(__) ____-_____' || $(this).val() == '(__) ____-____'){
        $(this).parent().find('span').show();
      }
    });
  // end.
 
  // BXSLIDER 
      $('.slide-capa').bxSlider({
        mode: 'vertical',
        controls: false,
        auto: true,
        slideMargim: 0
      });
  // end.

  // TRANSFORMA GALEIRA PARA BXSLIDER (opção em pho disponível na functions.php)
    /*transformaGaleria('#gallery-1');
    $('#gallery-1 a').attr('class', 'fancybox-button');
    $('#gallery-1 a').attr('rel', 'fancybox-button');

    $('.galeriabx').bxSlider({
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 360,
        slideMargin: 10
    });

    $(".fancybox-button").fancybox({
        prevEffect      : 'none',
        nextEffect      : 'none',
        closeBtn        : false,
        helpers     : {
            title   : { type : 'inside' },
            buttons : {}
        }
    });*/ 
  // end.

  // BT MATERIAL
    /*$('.btnTopo').click(function(){
      $('html, body').animate({scrollTop: 0},'slow');
    });*/
  // end.

  // BLOCKQUOTE
    /* $('blockquote').each(function(){
      $(this).wrapAll('<div class="blockquote-wrap" />');
      $(this).before('<div class="blockquote-before"></div>');
      $(this).after('<div class="blockquote-after"></div>');
      var altura = 0;//$(this).height();
      $(this).parent().find('.blockquote-after').attr('style', 'padding-top:' + altura + 'px');
    });*/
  // end.

  // PERSONALIZAR INPUT FILE
   /*$('#anexo').change(function(){
        var arquivo = $(this).val();     
        parteArquivo =   arquivo.split('\\');
        $('#arquivo').html(parteArquivo[parteArquivo.length-1]);
    });*/
  // end.

  // VALIDATE
    /*$('#formulario-contato').validate({
      rules:{
        assunto:{ required: true },
        nome:{ required: true },
        email:{ required: true, email: true },
        mensagem: { required: true }
      },
      messages:{
        assunto: { required: "*" },
        nome: { required: "*" },
        email:{ required: "*", email: "<sup>x</sup>" },
        mensagem: { required: "*" }
      }
    });*/ 
  // end.

  // MASKED INPUT
    /*$(function($){
        $("#dtnascimento").mask("99/99/9999");
    });
    $(function($){
      $('#telefone').focusout(function(){
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if(phone.length > 10) {
          element.mask("(99) 99999-999?9");
        } else {
          element.mask("(99) 9999-9999?9");
        }
      }).trigger('focusout');
    });*/
  // end.

  loadGravatars();

}); /* end of as page load scripts */

// TRANSFORMA GALERIA PARA BXSLIDER
  /*function transformaGaleria(galeria){
      var gal = jQuery(galeria).html();
      jQuery(galeria).html('');
      jQuery(galeria).append('<ul class="galeriabx">');
      jQuery(galeria).find('ul').append(gal);

      jQuery(galeria).find('dl').each(function(){
         var dl = jQuery(this).html();
         jQuery(this).after('<li>' + dl + '</li>');
         jQuery(this).remove();
      });
      jQuery(galeria).find('br').remove();
  };*/
  // end.
