define([
        "jquery"
    ],
    function($) {
        "use strict";

        var rand_1 = parseInt($('#rand_1').html());
        var rand_2 = parseInt($('#rand_2').html());

        var total = rand_1 + rand_2;

        if(total) {
            $('form').submit(function (event) {
                var error = null;
                var user_input = parseInt($('#num_captcha').val());

                if(total !== user_input) {
                    error = 1;
                }

                if (error) {
                    event.preventDefault();
                    var url = $('.num_captcha_container .controller').val();
                    $.ajax({
                        type:"POST",
                        url:url,
                        showLoader: true,
                        success: function(response) {
                            return;
                        }
                    });
                }

            });
        }
    });
