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
    <!--javascript		-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/fazerRequisicao.js"></script>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
    <link href="css/estilos.css" type="text/css"  rel="stylesheet">
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
	   	