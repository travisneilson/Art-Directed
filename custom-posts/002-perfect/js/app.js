$(function(){
  
  var counter = 2
    , audioTyping = $('audio.typing')[0]
    , audioHover = $('audio.hover')[0]
    , audioBeep = $('audio.beep')[0]
    , audioClose = $('audio.close')[0]
    , $btn = $('.next-text-btn')
    ;
  
  
  $btn.hover(function() {
    audioHover.play();
  }, function() {
    audioHover.pause();
  });
  
  
  function startText() {
    
    audioBeep.play();
    audioTyping.play();
    
    setTimeout(function() {
      $('.line-1').teletype({text: 'I paused, walking out of the café.'});
    }, 400);
    
    setTimeout(function() {
      $('.line-2').teletype({text: 'A man stood before me,'});
    }, 2000);
     
    setTimeout(function() {
      $('.line-3').teletype({text: 'like a hipster prophet on the street corner,'});
    }, 3200);
    
    setTimeout(function() {
      $('.line-4').teletype({text: 'revealing a divine truth to all who pass.'});
    }, 4800);
    
  }
    
  startText();  
  
  $('.next-text-btn').click(function() {
    
    if (counter === 1) {
     $('.block-1').show().siblings(':not(.next-text-btn)').hide();
     $('.block-1 span').empty();
      startText();
    }
    
    if (counter === 2) {
    
      $('.block-2').show().siblings(':not(.next-text-btn)').hide();
      $('.block-2 span').empty();
      
      setTimeout(function() {
        $('.line-5').teletype({text: 'He didn\'t say anything,'});
      }, 400);
      
      setTimeout(function() {
        $('.line-6').teletype({text: 'no message of dire consequence on his lips,'});
      }, 1800);
       
      setTimeout(function() {
        $('.line-7').teletype({text: 'only a smile,'});
      }, 3600);
      
      setTimeout(function() {
        $('.line-8').teletype({text: 'and a nod.'});
      }, 5000);
      
      audioBeep.play();
      audioTyping.play();
    }
    
    if (counter === 3) {
      
      $('.block-3').show().siblings(':not(.next-text-btn)').hide();
      $('.block-3 span').empty();
      
      setTimeout(function() {
        $('.line-9').teletype({text: 'We went our ways,'});
      }, 400);
      
      setTimeout(function() {
        $('.line-10').teletype({text: 'he preaching,'});
      }, 1800);
       
      setTimeout(function() {
        $('.line-11').teletype({text: 'and I, thinking…'});
      }, 2800);
      
      setTimeout(function() {
        $('.line-12').teletype({text: 'what does this man know, that I don\'t?'});
      }, 4500);
      
      audioBeep.play();
      audioTyping.play();
    }
    
    if (counter === 4) {
      
      $('.block-3').show().siblings(':not(.next-text-btn)').hide();
      $('.block-3 span').empty();
      
      audioClose.play();
    }
    
    counter++;
    if (counter === 5) {counter = 1;}
    
  });
  
});


$.fn.teletype = function(opts){
    var $this = this,
        defaults = {
            animDelay: 40
        },
        settings = $.extend(defaults, opts);
    
    $.each(settings.text, function(i, letter){
        setTimeout(function(){
            $this.html($this.html() + letter);
        }, settings.animDelay * i);
    });
    
};