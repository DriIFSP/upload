<?php
   ini_set('upload_max_filesize', '256M');

   $dir = "img/"; 

   $arquivo = $_FILES['foto'];

   /* conhecendo os atributos do file
   $nome = $_FILES['foto']['name'];
   $tipo = $_FILES['foto']['type'];
   $tamanho = $_FILES['foto']['size'];
   $temporario = $_FILES['foto']['tmp_name'];
   $erro = $_FILES['foto']['error'];
 
   echo "nome=".$nome."tipo =".$tipo. "tamanho=".$tamanho."temporario=" .$temporario."erro=".$erro;
   */
   
   // Move o arquivo da pasta temporaria de upload para a pasta de destino 

 
  echo $erro;
    if (move_uploaded_file($arquivo["tmp_name"], "$dir/".$arquivo["name"]))
    { 
       $imagem = "img/".$arquivo["name"];
       echo "<img src=\"$imagem\" width='10%' height='10%'><br>";
       echo "CAMINHO DA IMAGEM: $imagem";
    } 
   else
   { 
       echo "Erro ao enviar o arquivo"; 
   } 



?>