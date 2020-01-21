if (!sessionStorage.cookiesResponse){
    $("#con-cookies").fadeIn("slow");
}else{
    $("#con-cookies").hide();
}

$("#btn-cookies-yes").click(function(){
    sessionStorage.cookiesResponse=true;
    $("#con-cookies").fadeOut("slow");
});

$("#btn-cookies-no").click(function(){
    window.location="cookies.html";
});
