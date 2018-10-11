jQuery(document).ready(function ($) {
    $('#middle').removeClass("no-js");
    $('#nav').removeClass("no-js");
    //$('#nav').addClass("collapse");


    if ($('#right').length > 0) {
        $('#main').addClass('has-right');
    }

    $('a[aria-haspopup=true]').on('click', function (event) {
        var selector;
        var button;
        event.preventDefault();
        //TO DO:Focus on first item;
        button = $(event.target);
        selector = button.attr('data-target');
        if (selector == '#search-panel')
            return;
//        if (!$(selector).hasClass('in')) {
        if (button.attr('aria-expanded')=='false') {
            //expanding
            window.setTimeout(
                function () {
                    setButtonToCollapse(button);
                    scrollIntoView($(selector));
                },
                300
            );
        } else {
            //collapsing
            window.setTimeout(
                function () {
                    setButtonToExpand(button);
                },
                300
            );
        }
    });

    var navMenu=document.getElementById('nav');
    $(window).resize(function() {
        if($(window).width()>1100 && navMenu.style && navMenu.style.height && navMenu.style.height=='0px') {
            navMenu.removeAttribute("style");
        }
    });

    $('#navbar a').each(function () {
        if (!$(this).attr('title')) {
            $(this).attr('title', $(this).find('span:nth-of-type(2)').html());
        }
    });

    function setButtonToCollapse(button) {
        var html = button.html();
        html = html.replace('more', 'less');
        html = html.replace('More', 'Less');
        html = html.replace('glyphicon-plus', 'glyphicon-minus');
        button.html(html);
    }

    function setButtonToExpand(button) {
        var html = button.html();
        html = html.replace('less', 'more');
        html = html.replace('Less', 'More');
        html = html.replace('glyphicon-minus', 'glyphicon-plus');
        button.html(html);
    }


    function targetInView($target) {
        var scroll = $(window).scrollTop();
        return ($target.offset().top > scroll )
    }

    function scrollIntoView($target) {
        if(!$target || !$target.offset()) {
//            console.log('cant get offset of scroll target');
            return;
        }
//        console.log('target top = '+$target.offset().top);
        var scroll = $(window).scrollTop();
//        console.log('scroll top = '+scroll);
        if ($target.offset().top < 60) {
//            console.log($target.offset().top+' top near page top - show page top');
            scroll = 0;
        }
        if ($target.offset().top + $target.height() > scroll + $(window).height()) {
//            console.log('bottom below viewport set bottom to bottom');
            scroll = $target.offset().top + $target.height() - $(window).height();
        }
        if ($target.offset().top < scroll) {
//            console.log('top above viewport - show top');
            scroll = $target.offset().top;
        }
        if (scroll < 0) {
//            console.log('top near page top - show page top');
            scroll = 0;
        }

        if (scroll != $(window).scrollTop())
            $('html, body').animate({
                scrollTop: scroll
            }, 500);
//        else {
//            console.log('target in view - no scroll required');
//        }

    }


    /* Give "active" class to links to current page, and the list items that contain them */
    var currentPage = (window.location.pathname);//+window.location.hash;
    $("a").each(function () {
        if ($(this).attr('href') == currentPage
            || $(this).attr('href')+'/' == currentPage
            || $(this).attr('href')+'.html' == currentPage
            || $(this).attr('href')+'.phtml' == currentPage
        ) { // account for href/ (apache directoryslash), .html, .phtml
            $(this).addClass("active");
            $(this).closest('li').addClass("active");
            var parent = $(this).parent().parent().closest('li');
            parent.addClass("active");
            parent.parent().closest('li').addClass("active");
        }
    });

    $("#site-tool").attr('href', '#'); //without javascript this links to the site-map page

    var $collapsedSubmenus = $('body #nav ul ul').addClass("collapse");

    var isSiteMap=$('body').hasClass('site-map');
    $collapsedSubmenus.each(function () {
        var $a = $(this).prev();
        if ($a.attr('href') == '#') {
            $a.addClass('expandButton');
//                $a.append('<span class="glyphicon glyphicon-menu-down"></span>')
        } else if(!isSiteMap){
            var $expandButton = $('<span class="expandButton"><a href="#" class="glyphicon"></a></span>');
            $expandButton.insertBefore($(this));
        }
    });


    if(!isSiteMap){
        var $expandButtons = $("#nav span.expandButton a, #nav a.expandButton");
        $expandButtons.attr('aria-haspopup', true);
        $expandButtons.attr('aria-expanded', false);
        $expandButtons.click(function (event) {
            var searchExpanded=$('#search-toggle').attr('aria-expanded');
            event.preventDefault();
            var $li = $(this).closest('li');
            var $target = $li.find('ul:first');
            if ($target.hasClass('in')) {
                //               Collapse Menu
                $(this).attr('aria-expanded', false);
                $li.parent().find("ul.in").collapse('toggle');
                $li.parent().find("li.in a[aria-expanded=true]").attr('aria-expanded', false);
                $li.parent().find("li.in").removeClass('in');
                $target.collapse('toggle');
                $li.removeClass('in').closest('ul').removeClass('hasOneIn').closest('li').addClass('in');
                $target = $target.parent().parent();
            } else {
                //               Expand Menu
                $(this).attr('aria-expanded', true);
                $li.parent().find("ul.in").collapse('toggle');
                $li.parent().find("li.in a[aria-expanded=true]").attr('aria-expanded', false);
                $li.parent().find("li.in").removeClass('in');
                $target.collapse('toggle');
                $("#nav ul ul.hasOneIn").removeClass('hasOneIn');
                while ($li.length) {
                    $li = $li.addClass('in').closest('ul').addClass('hasOneIn').closest('li');
                }
            }
            $('#search-toggle').attr('aria-expanded',searchExpanded);
            window.setTimeout(
                function () {
                    scrollIntoView($target)
                },
                700
            );
            return false;
        });
    }

});
