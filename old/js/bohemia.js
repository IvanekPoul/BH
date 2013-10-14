$(document).ready(function() {
    $(".fancybox").fancybox({
                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    },
                    overlay:
                    {
                          css: { 'background': 'rgba(0, 0, 0, 1)' }
                    }                    
                }
            });
});