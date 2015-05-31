/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";
    var mainApp = {
        initFunction: function () {
            /*MENU 
            ------------------------------------*/
            $('#main-menu').metisMenu();
			
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },

        initialization: function () {
            mainApp.initFunction();

        }

    };
    // Initializing ///

    $(document).ready(function () {
        mainApp.initFunction();
        $(".sidebar-switch").click(function () {
            var sidebarSwitch = $(this).data('switch');
            if(sidebarSwitch == 'on'){
                $('.navbar-side').hide();
                $('#page-wrapper').css('margin-left','0');
                $(this).data('switch','off');
            }else{
                $(this).data('switch','on');
                $('.navbar-side').show();
                $('#page-wrapper').css('margin-left','260');
            }

        })
    });

}(jQuery));
