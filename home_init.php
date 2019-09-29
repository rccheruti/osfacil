<?php
  
  session_start();

  if(!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=1');
  }

  require_once('db.class.php');

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $id_usuario = $_SESSION['id_usuario'];
  $usuario = $_SESSION['usuario'];
  

  

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

   
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="item active">
                <img src="imagens/img_01.png" alt="" style="width:100%; height:500px;">
              </div>

              <div class="item">
                <img src="imagens/img_02.png" alt="" style="width:100%; height:500px;">
              </div>
    
              <div class="item">
                <img src="imagens/img_03.png" alt="" style="width:100%; height:500px;">
              </div>

              <div class="item">
                <img src="imagens/img_04.png" alt="" style="width:100%; height:500px;">
              </div>
          </div>  
        </div>



</body>
</html>
	   	