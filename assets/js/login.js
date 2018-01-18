function login() {

    var loginDrop = document.getElementById("login-drop");

    if(loginDrop.style.height === "0px"){
        //loginDrop.style.display = "block";
        loginDrop.style.height = "140px";
    }else{
        loginDrop.style.height ="0px";
        //loginDrop.style.display = "none";
    }

    function fadeOut(){
        if(loginDrop.style.opacity === "0.05"){
            clearInterval(timer);
        }
        var op = parseFloat(loginDrop.style.opacity);
        op -= 0.05;
        loginDrop.style.opacity = op.toString();
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