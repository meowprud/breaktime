var burguer = document.querySelector(".burguer");


burguer.addEventListener('click', function(){
    document.querySelector(".container").classList.toggle("show-menu");
});


document.querySelector("#qtdhoras").addEventListener("change", atualizaPreco)


function atualizaPreco(){

const qtdhoras = document.querySelector("#qtdhoras").value

let preco = qtdhoras * 100;

document.querySelector("#preco").innerHTML = preco

}