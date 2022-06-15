function loadingPage(){
    let loader = document.getElementById("preloader");

    window.addEventListener("load",function (){
        var delay = 1700;

        setTimeout(function(){
            loader.style.display = "none";
        },delay);
    });
}