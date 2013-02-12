$(function(){
  
  prepare();
  
  $('.next').click(function() { clickNext(); });
  $('.prev').click(function() { clickPrev(); });

}); // END.ready


$(document).keydown(function(e){
    if (e.keyCode == 37) {
       clickPrev();
       return false;
    }
});


$(document).keydown(function(e){
    if (e.keyCode == 39) {
       clickNext();
       return false;
    }
});


var $site = $('.site'),
    siteNum = $site.length,
    siteWidth = $site.outerWidth(),
    beltWidth = siteWidth * siteNum;

var pos = 1;


function prepare() {
  $('.belt').css('width', beltWidth + 'px');
}


function clickNext(){
  if (pos < siteNum) {
    pos++;
   clickFn();
  }
}


function clickPrev(){
  if (pos > 1) {
    pos--;
    clickFn();    
  }
}

function clickFn() {
  var newLeft = (pos - 1) * siteWidth;
  $('.belt').css('left', '-' + newLeft + 'px');
  $site.removeClass('active').eq(pos - 1).addClass('active');
}