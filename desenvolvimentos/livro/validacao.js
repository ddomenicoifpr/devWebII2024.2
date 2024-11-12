//Arquivo com a rotina de validação dos dados do formulário

function validarDados() {
    var titulo = document.getElementById("titulo").value;
    var autor  = document.querySelector("#autor").value;
    var genero  = document.querySelector("#genero").value;
    var qtdPag  = document.querySelector("#qtdPag").value; 
    //alert(titulo + " - " + autor + " - " + genero + " - " + qtdPag);

    var divMsg = document.querySelector("#divMsg");

    if(titulo.trim() == "") {
        divMsg.innerHTML = "Informe o título!";
        return false;
    }

    if(autor.trim() == "") {
        divMsg.innerHTML = "Informe o autor!";
        return false;
    }

    if(genero == "") {
        divMsg.innerHTML = "Informe o gênero!";
        return false;
    }

    if(qtdPag == "") {
        divMsg.innerHTML = "Informe a quantidade de páginas!";
        return false;
    }

    return true;
}