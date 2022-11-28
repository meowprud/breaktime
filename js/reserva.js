document.querySelector("#qtdhoras").addEventListener("change", atualizaPreco)

var radios= document.querySelectorAll("input[type=radio]");

for (var x=0; x<radios.length; x++){

    radios[x].onchange = function clicar(){
        clique(this.value);
        

    }
}

var valor = 0;

function clique(i){
   
    

    if(i == 1){
        valor = 13;
           
        }

    if (i == 2){
        valor = 9;

    }

        
    console.log(valor);
}

function atualizaPreco(){

    clique();
const qtdhoras = document.querySelector("#qtdhoras").value

let preco = qtdhoras * valor;

document.querySelector("#preco").innerHTML = preco

}