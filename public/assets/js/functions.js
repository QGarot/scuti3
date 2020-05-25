console.log("ScutiCMS v3.0")

$(document).ready(function() {
    $("body").addClass("scroll-disabled")
    $(".loader").fadeOut(500)
    $("body").removeClass("scroll-disabled")
})

// me.php
$(".room-thumbnails").hover(function() {
    $(this).children().slideToggle(duration=150)
})
