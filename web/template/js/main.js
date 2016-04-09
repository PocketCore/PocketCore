/* global $ */
    var title = "";
    $(document).ready(function(){
         $('.parallax').parallax();
         document.title = title;
         $('.slider').slider({
             full_width: true,
             indicators: false
         });
    });
    
    function show_contributors(){
        $('.contributors').slideToggle(300);
    }