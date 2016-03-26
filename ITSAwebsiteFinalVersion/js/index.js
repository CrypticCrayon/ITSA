$(document).ready(function(){

 $("#subscribeForm").submit(function(e){
  e.preventDefault();
  alert('Thank you for subscribing!');
    // postContactToGoogle

    if($('#email').valid()){
      var email = $('#email').val();

      $.ajax({
         url: "https://docs.google.com/forms/d/12KRnR4_VOPuzb64tsEcGbX2IwSDrZGGD7HDKJskX71U/formResponse",
         data: { "entry.1395639298": email},
         type: "POST",
         dataType: "?alt=json",
         success: function(data) {
          console.log("success")
        },
        error: function(){
          console.log("failure");
        }
      });
      $('#email').val("");
    }
  });
});

$(document).ready(function() {

  $('.navbar-fixed-top').click(function(){
   window.location='http://itstudentalliance.com';
  });

  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });

  
  $('figure').hover( function() {
    $(this).toggleClass('cs-hover');
  });


});