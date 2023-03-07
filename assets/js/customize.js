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

    // note:



})(jQuery); // its a structure 




