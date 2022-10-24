const imgs = document.getElementsById("picture");
const img = document.querySelectorAll("#img .pic"); 

let idx = 0;


function carrossel(){
    idx++;

    if (idx > img.length - 1){
        idx = 0;
    }

    imgs.style.transform = `translateX(${-idx * 100}%`;

}

setInterval(carrossel, 2000);