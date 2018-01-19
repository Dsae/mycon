var slidePosition = 0;
var timer = setInterval(slideRight,5000);
var pics = ["./assets/images/convention-3.png", "./assets/images/cut1_mehr_farbe.png", "./assets/images/mycon.png"];

function slideLeft(){
    clearInterval(timer);
    timer = setInterval(slideRight,5000);

    if (slidePosition <= 0){
        slidePosition = 2;
    }else{
        slidePosition--;
    }

    document.getElementById("carouselImg").src = pics[slidePosition];
}

function slideRight() {
    clearInterval(timer);
    timer = setInterval(slideRight,5000);

    if (slidePosition >= 2){
        slidePosition = 0;
    }else{
        slidePosition++;
    }

    //document.getElementById("carouselImg").style.opacity = "0";
    document.getElementById("carouselImg").src = pics[slidePosition];
    //document.getElementById("carouselImg").style.opacity = "1.0";
}
