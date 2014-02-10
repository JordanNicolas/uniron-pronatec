jQuery(document).ready(function($) {
  /** Lavalamp Menu Principal */
  $(".lavalamp").lavalamp({'default_selected': '.active', speed: 'slow', easing: 'swing'}, {
    'height': '10px',
    'width': '51px',
    'left': '85px',
    'top': '30px',
    'border-bottom': '4px solid #3599B1',
  });

  /** HoverAlls Ico Netpix */
  $("#ico-netpix").HoverAlls({
    tooltip:true,
    starts:"-170px,-50px",
    ends:"-170px,-50px",
    returns:"-170px,-50px",
    bg_class:"netpix-tooltip-background",
    text_class:"netpix-tooltip-text",
    speed_in:450,
    speed_out:150,
    effect_in:"easeOutBack",
    effect_out:"easeInSine",
    bg_width:"200px",
    bg_height:"45px",
    big_link:true
  });

  /** Click do menu e exibição por abas */
  $('.menu li a').click(function(e) {
    e.preventDefault();
    target = $(this).data('target');
    $('.templates').addClass('hidden');

    $('#' + target).fadeIn('slow').removeClass('hidden');

    $('.menu li').removeClass('active');
    $(this).parent().addClass('active');
  });

  /** Mascaras Globais */
  $('.cpf').mask('999.999.999-99');
  $('.telephone-mask, #fi_telefone').mask('(99) 9999-9999');
});