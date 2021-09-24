function hoverOff(e){
  e.setAttribute("style","transition: ease 1s;");
}

$("#discoverBtn").click(function(){
    $(".discover-div").fadeOut(2000);
    $(".discover-div").css("display", "none");
    $(".admin-or-user-Div").fadeIn(2000);
  });

$(document).ready(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
      });
      
});

function loginPage(){
  window.location.href="files/admin/login.php";
}

function userSide(){
  window.location.href="files/user/homepage.php";
}

function facebookPage(){
  window.location.href="https://www.facebook.com/";
}

function instaPage(){
  window.location.href="https://www.instagram.com/";
}

function twitterPage(){
  window.location.href="https://twitter.com/";
}