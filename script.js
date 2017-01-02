$(".see-more").on("click", function(){
    $(this).hide();
    $(this).siblings(".teaser").hide();
    $(this).siblings(".complete").show();
    $(this).siblings(".see-less").show();
});
$(".see-less").on("click", function(){
    $(this).hide();
    $(this).siblings(".complete").hide();
    $(this).siblings(".teaser").show();
    $(this).siblings(".see-more").show();
});