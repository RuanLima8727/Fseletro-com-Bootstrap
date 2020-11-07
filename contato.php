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

if(isset($_POST['nome']) && isset($_POST['msg'])){

    $nome = $_POST['nome'];
    $msg= $_POST['msg'];
    
    $sql= "insert into comentarios (nome,msg) values('$nome','$msg')";
    $result=$conn->query($sql);
}






?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title>Contato</title>
        <link href="Css/estilo.css" rel="stylesheet">



    </head>
    <body>
                                            <!-- ANTIGO MENU DE ÂNCORAS -->
<!-- Menu com require -->
<?php
                require("menu.html")
?>
<!-- Menu com require -->    

                    <h2 class="contato container my-5 bg-info" style="margin-left: 25%;">Contato</h2>
                    <br><br><br><br><br>        
<section class="container ">
    
    <div class="contato bg-info" text-align: center;>
        
        <img src="Imagens/email.jpg" style="Width:70px; height:50px; padding:5px" >
       <p>Fullsatcleletro@gmail.com</p>
    </div>
         
    <div class="contato bg-info">
            <img src="./Imagens/whatsapp.jpg" style="Width:50px; height:50px; padding:5px">
            <p>(11)9696-8585</p> 
     </div>   
</section>




<br><br>
<div class="contato container bg-info text-dark" style="; margin-left: 28%;">

    <form action="" method="post" >
        <div class="form-group  ">
                <label for="nome" class="text-dark ">Seu Nome</label><br>
            <input class="form-control " type="text" style=";" placeholder="Deixe seu Nome!!" id="nome" name="nome">
        </div>
            <br>
        <div class="form-group">
            <label for="coment" class="text-dark ">Insira o Comentário</label><br>
            <input  class="form-control " style=";" placeholder="Deixe seu comentario!!" id="coment" name="msg"></input><br>
        </div>
            

        <input class="btn btn-sm bg-secondary" type="submit" name="submit" value="Enviar" style="cursor: pointer;">
    </form> 

</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
            
            
            <?php
                        $sql= "select * from comentarios";
                        $result = $conn->query($sql);

                if($result->num_rows>0){


                    while($row=$result->fetch_assoc()){
                        
                        echo "<hr>";
                        echo "Nome: " .  $row['nome'] ."<br / >";
                        echo "Mensagem: ". $row['msg'] ."<br / >"; 
                        echo "Data:" . $row['data'] . "<br / >";
                        echo "<hr>";
                        
                            }
                        }
                        else{
                            echo"Nenhum Comentário";
                        }
            ?>




           
<div class="container">
        
<footer id="rodape"> <!--Rodapé-->
        
        <h4  class="text-danger"id="FPagamento">Nossas Formas De Pagamento</h4>
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