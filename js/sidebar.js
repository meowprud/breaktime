var burguer = document.querySelector(".burguer");
var usuario = document.querySelector(".usuario");

burguer.addEventListener('click', function(){
    document.querySelector(".container").classList.toggle("show-menu");
});

usuario.addEventListener('click', function(){
    document.querySelector(".container").classList.toggle("show-reserva");
});






