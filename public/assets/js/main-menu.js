$().ready(function () {
    /* Menu */
    $(".js-hidden-menu").hide();

    $(".js-nav-menu").on("click", function () {
        $(this).toggleClass("open");
        $(this).next().toggleClass("active");
    });

    $(".navbar-toggle").on("click", function () {
        $(".js-dropdown-menu").removeClass("active");
    });

    //tabs checkout page 2
    $("ul.tabs").each(function () {
        $(this).children().first().addClass("active");
        $(this).next().children().first().show().addClass("active");
    });

    $("ul.tabs li").each(function () {
        $(this).on("click", function () {
            var tab_content = $(this).parent().next().children();
            $(this).parent().children().removeClass("active");
            $(this).addClass("active");
            tab_content.hide().removeClass("active");
            var activeTab = $(this).attr("rel");
            $("#" + activeTab)
                .fadeIn(400)
                .addClass("active");
        });
    });

    function toggleMenu() {
        if ($(window).width() < 769) {
            //initially hide navigation
            $(".js-dropdown-menu").removeClass("active");
            $(document).on("click", function (e) {
                var p = $(e.target).closest(".navbar-default").length;
                if (!p) {
                    $(".js-dropdown-menu").removeClass("active");
                }
            });
        } else $(".js-dropdown-open").show();
    }
});
