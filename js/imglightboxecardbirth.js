// LIGHT BOX FILES
var lightBoxData = [
  {thumb: "images/birthdaysmall.jpg", img: "images/birthdaysmall.jpg"},
  {thumb: "images/birthdaysmall.jpg", img: "images/birthdaysmall.jpg"},
  {thumb: "images/birthdaysmall.jpg", img: "images/birthdaysmall.jpg"},
  {thumb: "images/birthdaysmall.jpg", img: "images/birthdaysmall.jpg"},
 ];
  
  
function clickEvents() {
  
  // THUMBNAIL CLICK EVENT
  $("img").on("click", function() {
    
    // PUT DATA IN IMAGE
    $(".overlay").fadeIn(800);
    $("#bigImage").fadeIn(800);
    var src = $(this).attr("data");
    $("#bigImage").attr("src", src);
  
  })
  
  $(".overlay").on("click", function() {
    
    // REMOVE LIGHTBOX
    $(this).fadeOut(500, function() {
      $(this).hide();
    })
  
    $("#bigImage").fadeOut(250, function() {
      $("#bigImage").hide();
    })
 
  })
  
};

function populateThumbs() {
  
  for(i = 0; i < lightBoxData.length; i++) {
  
    $(".randomLightbox").attr("src", lightBoxData[i].thumb);
    $(".randomLightbox").attr("data", lightBoxData[i].img);
    
  }
  
};

$(document).ready(function() {
  
  $(".overlay").hide();
  $("#bigImage").hide();
  
  populateThumbs();
  clickEvents();
  
});