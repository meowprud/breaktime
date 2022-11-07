
var x = documentElementById("produto1");
var y = documentElementById("produto2");
var z = documentElementById("produto3");

var produto = documentElementByClassName("produto");

function redireciona(){
    if(produto == x){
        window.location.href="http://localhost/version1/produtos.html";
    }
    else if(produto == y){
        window.location.href="http://localhost/version1/produtos.html";
    }

    else if(produto == z){
        window.location.href="http://localhost/version1/produtos.html";
    }
    
    else{
        alert('erro');
    }
}