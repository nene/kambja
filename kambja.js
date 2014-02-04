$(function(){
  
  var fadeOutStep = function(id, callback) {
    $(id).fadeOut(1000, function() {
      setTimeout(callback, 2000);
    });
  };
  
  var fadeOut = function() {
    fadeOutStep("#an-1", function() {
      fadeOutStep("#an-2", function() {
        fadeOutStep("#an-3", fadeIn);
      });
    });
  };
  
  var fadeIn = function() {
    $("#animation #an-1").show();
    $("#animation #an-2").show();
    $("#animation #an-3").fadeIn(1000, function(){
      setTimeout(fadeOut, 2000);
    });
  };
  
  fadeOut();
  
});

