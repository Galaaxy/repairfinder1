$('.person-wrapper .person-item').each(function() {
    "use strict";

    $(this).find('.btn-link').on("click", function(){
        var offsetLeft = $(this).offset().left - $('.wrapper').offset().left;
        var hash = ($('#' + $(this).attr('id')));
        var href = ($(this).attr('href'));

        $(href).css('margin-left', -offsetLeft);
        
        $(href).on('shown.bs.collapse', function(e) {
            scrollToHash(hash);
        });

    });
});

var togglePerson = function () {
    "use strict";
    $('.person-wrapper .person-item').each(function() {
        "use strict";
        var offsetLeft = $(this).find('.btn-link').offset().left - $('.wrapper').offset().left;
        $(this).find('.full-collapse').css('margin-left', -offsetLeft);
    });
};

var TO = false;
var resizeEvent = 'onorientationchange' in window ? 'orientationchange' : 'resize';

// Bind the resize event and set timeout
$(window).bind(resizeEvent, function() {
    TO && clearTimeout(TO);
    TO = setTimeout(resizeBody, 100);
});

// Function to do something on resize
function resizeBody(){
    togglePerson();
    $(window).unbind('scroll');
}

function scrollToHash(hash) {
    $('html,body').animate({
        scrollTop: hash.offset().top - 130
    }, 500);
}

// opens collapse item by location hash
var collapsePersonbyHash = function (hash) {
    var target = hash.replace(/collapse/gi, 'heading');
    scrollToHash($(target));
    $(hash).collapse('toggle');
};

$(document).ready(function () {
    $('a.externalPersonLink').each(function () {
        $(this).attr('target', '_top');
    });

    var hash = location.hash;
    if (hash.length && hash.indexOf('collapse') > -1) {
        togglePerson();
        collapsePersonbyHash(hash);
    }
});
