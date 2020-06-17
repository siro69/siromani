var $sidenav = $('.main-navbar .sidenav'),
    $toggler = $('.main-navbar .navbar-toggler'),
    collapsed = false;

$sidenav.css('top', $('.main-navbar .navbar').outerHeight());

if (window.innerWidth < 768) {
  collapse();
}

$(window).resize(function() {
  if (window.innerWidth < 768) {
    console.log(collapsed);
    collapse();
  } else {
    console.log(collapsed);
    restore();
  }
});

$toggler.click(function() {
  if (!$sidenav.hasClass('show')) {
    showSidenav();
  } else {
    hideSidenav();
  }
})

function showSidenav() {
  $sidenav.css('display', 'flex');
  window.setTimeout(function() {
    // Must be number value. Adjust as needed.
    $sidenav.css({
      'top':'110px',
      'padding-bottom':'20px',
      'width':'100%', 
      'color':'#fff',
      'background-color':'#000000db'
    });
  }, 10);
  $toggler.css('color', 'white');
  $sidenav.addClass('show');
}

function hideSidenav() {
  $sidenav.css({
    'width':'0px', 
    'box-shadow':'none',
    'background':'transparent'
  });
  window.setTimeout(function() {
    $sidenav.css('display', 'none');
  }, 500);
  $toggler.css('color', 'white')
  $sidenav.removeClass('show');
}

function collapse() {
  if (!collapsed) {
    $('.main-navbar .navbar-collapse > ul').appendTo('.main-navbar  .sidenav').addClass('w-100 text-center');
    $('.main-navbar  .sidenav > ul .nav-link').addClass('w-100');
    collapsed = true;
  }
}

function restore() {
  if (collapsed) {
    $('.main-navbar  .sidenav > ul').appendTo('.main-navbar  .navbar-collapse').removeClass('w-100 text-center');
    $('.main-navbar  .sidenav > ul .nav-link').removeClass('w-100');
    hideSidenav();
    collapsed = false;
  }
}

// scroll functions
$('body').scroll(function(e) {
    // add/remove class to navbar when scrolling to hide/show
    var scroll = $('body').scrollTop();
        
    if (scroll >= 150) {
        $('.navbar').addClass("fixed-top");
    } else {
        $('.navbar').removeClass("fixed-top");
    }

});
/* Tooltip */
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

/* Premium Job Js */


/* */
$(document).ready(function() {
    
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
});
