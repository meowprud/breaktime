var burguer = document.querySelector(".burguer");
var usuario = document.querySelector(".usuario");

burguer.addEventListener('click', function(){
    document.querySelector(".container").classList.toggle("show-menu");
});

usuario.addEventListener('click', function(){
    document.querySelector(".container").classList.toggle("show-reserva");
});

document.querySelector("#qtdhoras").addEventListener("change", atualizaPreco)


function atualizaPreco(){

const qtdhoras = document.querySelector("#qtdhoras").value

let preco = qtdhoras * 100;

document.querySelector("#preco").innerHTML = preco;

}




