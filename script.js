let slide = 0
setTimeout(() => {
    $('.slide').eq(slide).show()
}, 500);
function next(){
    $('.slide').eq(slide).hide()
    slide++
    $('.slide').eq(slide).show()
}
$(".btn-success" ).on("click", function() {
    window.location = 'https://google.com.br'
});