 $(function ($) {

    $('body').on("click", '#addFields', function () {
      $.ajax({ url: 'includes/cca_gerador/new_line.php'
      }).done(function (data) {
        $('#content').append(data);
      });
    })

// When we click on the LI
$("li.nav-item").click(function(){
  // If this isn't already active
  if (!$(this).hasClass("active")) {
    // Remove the class from anything that is active
    $("li.nav-item.active").removeClass("active");
    // And make this active
    $(this).addClass("active");
  }
});

$(document).ready(function() {              
  $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
      var $this = $(this),
      c = $this.data('count');    
      if (!c) c = 0;
      c++;
      $this.data('count',c);
      $('#'+this.id+'-bs3').html(c);
  });      
  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
  });                                        
}); 
// Carousel Auto-Cycle
$(document).ready(function() {
  $('.carousel').carousel({
    interval: 6000
  })
});


$(function(){   
  var nav = $('.navbar');   
  $(window).scroll(function () { 
  if ($(this).scrollTop() > 150) { 
  nav.addClass("menu-fixed"); 
  } else { 
  nav.removeClass("menu-fixed"); 
  } 
  });  
  });
}); 