(function ($) {
    // Update the site title in real time...
    wp.customize('banner_heading', function (value) {
        value.bind(function (newval) {
            $('.ab-heading').html(newval);
        });
    });


    //for description part
    wp.customize('banner_desc', function (value) {
        value.bind(function (newval) {
            $('.ab-para').html(newval);
        });
    });

    //for btn part
    wp.customize('banner_btn', function (value) {
        value.bind(function (newval) {
            $('.ab-link').html(newval);
        });
    });
   
    //for heading color part
    wp.customize('banner_heading_color', function (value) {
        value.bind(function (newval) {
            $('.ab-heading').css(newval);
        });
    });
   
})(jQuery); // its a structure




