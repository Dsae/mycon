function login() {

    var loginDrop = document.getElementById("login-drop");

    if(loginDrop.style.display === "none"){
        loginDrop.style.display = "block";
        loginDrop.style.height= "0";
        var timer = setInterval(fadeIn,30);
    }else{
        loginDrop.style.display = "none";
    }

    function fadeOut(){
        if(loginDrop.style.height === "149"){
            clearInterval(timer);
        }
        var op = parseFloat(loginDrop.style.height);
        op -= 1;
        loginDrop.style.height = op.toString();
    }

    function fadeIn(){
        if(loginDrop.style.opacity === "0.95") {
            clearInterval(timer);
        }
        var op = parseFloat(loginDrop.style.opacity);
        op += 0.05;
        loginDrop.style.opacity = op.toString();
    }
}