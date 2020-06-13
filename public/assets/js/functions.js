console.log("ScutiCMS v3.0")

$(document).ready(function() {
    $(".loader").fadeOut(500)
})

// me.php
$(".room-thumbnails").hover(function() {
    $(this).children().slideToggle(duration=150)
})

$("#more-friends").click(function() {
    $("#all-friends").fadeIn(300)
})

$(".close-div").click(function() {
    $(this).parent().parent().parent().fadeOut(300)
})
