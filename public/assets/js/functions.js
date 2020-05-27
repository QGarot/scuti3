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

$("#more-friends").click(function() {
    $("body").addClass("scroll-disabled")
    $("#all-friends").fadeIn(300)
})

$(".close-div").click(function() {
    $(this).parent().parent().parent().fadeOut(300)
    $("body").removeClass("scroll-disabled")
})
