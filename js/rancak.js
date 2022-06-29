/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */

var back_to_top = function(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};

var toggle_menu = function(){
  "use strict";
  $('.header-menu-toggle').click(function(){
	$(this).toggleClass('header-menu-open');
	$('menu').slideToggle('fast');
  });
  
  $('menu .sticky-link').click(function(){
    $('.header-menu-toggle').removeClass('header-menu-open');
    $('menu').slideUp('fast');
  });
};

var functionforscroll = function(id){
  var reqId = "#"+id;
  window.scrollTo(0, $(reqId).offset().top-89);
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  toggle_menu();
});