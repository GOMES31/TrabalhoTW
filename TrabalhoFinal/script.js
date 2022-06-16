function loadingPage(){
    let loader = document.getElementById("loader");
    window.addEventListener("load",function (){
        let delay = 1700;

        setTimeout(function(){
            loader.style.display = "none";
        },delay);
    });
}

