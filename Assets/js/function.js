window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
$(document).ready(function(){
    $(".search").hover(function(){
        $("#search-img").attr("src", "https://i.imgur.com/2pI1RZP.png");
    },function(){
        $("#search-img").attr("src", "https://i.imgur.com/ODhJBK2.png");
    });
});