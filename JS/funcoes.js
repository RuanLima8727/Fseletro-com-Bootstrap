// Função para selecionar os produtos de interesse através de categoria
function exibirCat(categoria){
    let elemento = document.getElementsByClassName("produto")
        for (var i = 0; i<elemento.length; i++ ){
            console.log(elemento[i].id)
            
            if(categoria == elemento[i].id){
                    elemento[i].style = "display:inline-block" }   

                else elemento[i].style = "display:none"}
}
// Função para selecionar os produtos de interesse através de categoria

// Função para exibir todos os produtos na tela
let todos = () => { 
    let elemento = document.getElementsByClassName("produto")
    for (var i = 0; i<elemento.length; i++ ){
            elemento[i].style = "display:inline-block" } 
    }  
// Função para exibir todos os produtos na tela

// Função para destacar a imagem dos produtos
let destaque = (imagem) => {
    if(imagem.style.height == "200px" ){
            imagem.style.height = "300px"; imagem.style.width = "300px";}
        else{
            imagem.style.height = "200px"; imagem.style.width = "200px";}
   
}
// Função para destacar a imagem dos produtos



//Função para retornar a cor do fundo dos itens de categoria
function menuCategorias() {
    var menu = document.getElementsByClassName("item")
   
var i= 0
       for(var i = 0; i <= menu.length ; i++ ){
        menu[i].classList.add("onMouse")
       }
    
    
}//Função para retornar a cor do fundo dos itens de categoria


