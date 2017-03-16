(function ($) {

    // region Page Component
    var pageComponent = (function () {
        "use strict";

        var headerDAttr = "blz-pg-header",
            headerSel = "[data-" + headerDAttr + "]",
            headerStickyClass = "header-sticky",
            footerDAttr = "blz-pg-footer",
            footerSel = "[data-" + footerDAttr + "]",
            footerBottomClass = "footer-bottom",
            footerStickyClass = "footer-sticky",
            adminBarBodyClass = "admin-bar",
            adminBarSel = "#wpadminbar",

            init = function () {
                if ($(headerSel).data(headerDAttr) === "sticky") stickyHeaderInit();
                if ($(footerSel).data(footerDAttr) === "bottom") fullPageHeightInit();
                if ($(footerSel).data(footerDAttr) === "sticky") stickyFooterInit();
            },

            adjustMinPageHeight = function () {
                var body = $("body"),
                    bodyHeight = body.outerHeight(true),
                    winHeight = $(window).height();
                if (bodyHeight < winHeight) body.css("min-height", winHeight + "px");
            },

            stickyHeaderInit = function () {
                var body = $("body"),
                    header = $('#header-bg'),
                    headerHeight = header.outerHeight(),
                    adminBarHeight = 0;

                if (body.hasClass(adminBarBodyClass)) {
                    adminBarHeight = $(adminBarSel).outerHeight();
                    header.css('top', adminBarHeight + 'px');
                }
                header.addClass(headerStickyClass);
                body.css('padding-top', (adminBarHeight + headerHeight) + 'px');
            },

            fullPageHeightInit = function () {
                var footer = $(footerSel),
                    footerHeight = footer.outerHeight(true);
                adjustMinPageHeight();
                footer.addClass(footerBottomClass);
                $("body").css('padding-bottom', footerHeight + 'px');
            },

            stickyFooterInit = function () {
                var footer = $(footerSel),
                    footerHeight = footer.outerHeight(true);
                adjustMinPageHeight();
                footer.addClass(footerStickyClass);
                $("body").css('padding-bottom', footerHeight + 'px');
            };

        return {
            init: init
        };
    })();
    // endregion Page Component

    // region Equal Height Component
    var equalHeightComponent = (function () {
        "use strict";

        var equalHeightColDAttr = "blz-eqht-col",
            equalHeightColQty = 10,
            equalHeightGroupSel = "[data-blz-eqht-group]",

            init = function () {
                $(window).on("load resize", equalHeightColumns).on("load resize", equalHeightGroup);
            },

            // Equal height columns
            // Assign data-blz-eqht-col="i", where i is number from 1 to equalHeightColQty, to each column that should have equal height
            equalHeightColumns = function () {
                var i,
                    tallest = 0,
                    group;
                for (i = 1; i <= equalHeightColQty; i++) {
                    tallest = 0;
                    group = $("[data-"+equalHeightColDAttr+"='"+i+"'");
                    group.each(function () {
                        var thisHeight = $(this).height();
                        if (thisHeight > tallest) tallest = thisHeight;
                    });
                    group.height(tallest);
                }
            },

            // Assign [data-blz-eqht-group] to the parent element of those that must have equal height
            equalHeightGroup = function () {
                $(equalHeightGroupSel).each(function () {
                    var maxHeight = 0;
                    $(this).children().each(function () {
                        if ($(this).height() > maxHeight)
                            maxHeight = $(this).height();
                    });
                    $(this).children().height(maxHeight);
                });
            };

        return {
            init: init
        };
    })();
    // endregion Equal Height Component

    // region Colorbox Component
    var colorboxComponent = (function () {
        "use strict";

        var init = function () {
            // Initialize Colorbox
            $('[data-colorbox="true"] .gallery-images a').colorbox({
                rel: 'gal',
                transition: 'none',
                opacity: '0.85',
                title: false
            });
        };

        return {
            init: init
        };
    })();
    // endregion Colorbox Component

    $(document).ready(pageComponent.init);
    $(document).ready(equalHeightComponent.init);
    $(document).ready(colorboxComponent.init);
})(jQuery);