$(function(){
  // milliseconds to wait between animations
  var DELAY = 5000;
  // animation speed in milliseconds
  var ANIM = 1000;
  
  var fadeOutStep = function(id, callback) {
    $(id).fadeOut(ANIM, function() {
      setTimeout(callback, DELAY);
    });
  };
  
  var fadeOut = function() {
    fadeOutStep("#an-1", function() {
      fadeOutStep("#an-2", function() {
        fadeOutStep("#an-3", function() {
          fadeOutStep("#an-4", fadeIn);
        });
      });
    });
  };
  
  var fadeIn = function() {
    $("#animation #an-1").show();
    $("#animation #an-2").show();
    $("#animation #an-3").show();
    $("#animation #an-4").fadeIn(ANIM, function(){
      setTimeout(fadeOut, DELAY);
    });
  };
  
  setTimeout(fadeOut, DELAY);
  
});

