<?php

$servidor="localhost";
$usuario="root";
$senha="";
$banco="fullstackeletro";

$conn= mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
}
//  CONEXÃO AO BD fullstackeletro 


?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        
        <!-- link para css -->
        <link href="./Css/estilo.css" rel="stylesheet"> 
        
        <!-- link para o JS -->
        <script src="JS/funcoes.js"></script>

    </head>
    <body>
   
                            <!-- ANTIGO MENU DE ÂNCORAS -->
<!-- Menu com require -->
<?php
                require("menu.html")
?>
<!-- Menu com require -->

<div class="prod container ">
    <header class="cat" ><h2>Produtos</h2>
    </header>
</div>
   
<div class="categoria container bg-info text-dark"> 
    <!--Categorias-->
    <section >    
       
            <ul>
                <li class="item" onclick="todos()" onmouseover="menuCategorias('1')" onmouseout="mouseOut('1')" >Todos(12)</li>
                <li class="item" onclick="exibirCat('geladeira')"onmouseover="menuCategorias('2')" onmouseout="mouseOut('2')">Geladeiras(3)</li>
                <li class="item" onclick="exibirCat('fogao')" onmouseover="menuCategorias('3')" onmouseout="mouseOut('3')">Fogões(2)</li>
                <li class="item" onclick="exibirCat('microondas')" onmouseover="menuCategorias('4')" onmouseout="mouseOut('4')">Microondas(3)</li>
                <li class="item" onclick="exibirCat('lavaroupas')" onmouseover="menuCategorias('5')" onmouseout="mouseOut('5')">Lava-Roupas(2)</li>
                <li class="item" onclick="exibirCat('lavaloucas')" onmouseover="menuCategorias('6')" onmouseout="mouseOut('6')">Lava-Louças(2)</li>
            </ul>
            
    </section>  
    <!--Categorias-->
    
</div>

<br><br><br>
<br><br><br>


 <section class="listaprodutos container-fluid">    <!--Produtos-->

    
             <?php

                        $sql= "select * from produtos";
                        $result = $conn->query($sql);

                if($result->num_rows>0){


                    while($row=$result->fetch_assoc()){
                                
            ?>

<!--Célula configurada de produto individual-->                                         

<div class="produto container"  id="<?php echo $row["categoria"]; ?>" style="display: inline-block;"   > 
            <img src="<?php echo $row["imagem"]; ?>" style=" height: 200px; width:200px  "  onclick="destaque(this)">
            <br>
            <p class="descrição"><?php echo $row["descricao"]; ?></p>
            <hr>
            <p class="descrição"><strike>R$<?php echo $row["preco"]; ?></strike></p>
            <p class="preço">R$<?php echo $row["preco_venda"]; ?></p><hr>
        </div>

<!--Célula configurada de produto individual--> 

            <?php
                            }
                        }
                        else{
                            echo"Nenhum produto cadastrado";
                        }

             ?>


        
        

        
   
    
</section> <!--Produtos-->

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<script>
    console.log(document.getElementsByTagName("div"))  
</script>



<div class="container">
        
<footer id="rodape"> <!--Rodapé-->
        
        <h4 class="text-danger" id="FPagamento">Nossas Formas De Pagamento</h4>
        <img src="./Imagens/Pagamento.png" alt="Formas De Pagamento" width="33%" height="20%">
        <p>&copy: Recodepro</p>
</footer>       <!--Rodapé-->
</div>
   
<section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</section>
</body>
</html>