    $(function() {
    $( "#innernav" ).tabs();
  });

//skill
jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
        width:jQuery(this).attr('data-percent')
        },6000);
});
