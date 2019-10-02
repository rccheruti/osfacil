<?php

require_once("session_start.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>OS Fácil</title>

<!--javascript		-->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/consulta.js"></script>

<!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
        <link href="css/consulta.css" type="text/css"  rel="stylesheet">
        <link href="css/estilos.css" type="text/css" rel="stylesheet">




</head>

	<body>

    <div class="Container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="#">
            <select name="SelectOptions" id="SelectOptions" class="form-control" required>
                <option value="">Selecione</option>
                <option value="Div1">OS</option>
                <option value="Div2">CPF</option>
                <option value="Div3">IMEI</option>
            </select>
        </form>
        </div>

        <br/>
    
            <div class="DivPai">
                
    <!-- Primeira opção -->
                <div class="Div1">
                    <form method="post" action="consulta.php?#popup0" id="consultas">                       
                        <input type="text" class="form-control" id="os" name="os" placeholder="Nº OS" required="requiored">
                        <br/>
                        <a href="#popup0">
                        <button class="btn btn-primary form-control">Consultar</button>
                        </a>
                    </form>
                </div>
            
    <!-- Popup da primeira opção-->
                   <div id="popup0" class="overlay">
                    <div class="popup">
                        <h3>Resultados OS</h3>
                        <a class="close" href="#">&times;</a>
                        <div class="content">

                            OS: 001
                            <br/>
                            Nome: Josnel Teste da Silva

                            <br/><hr/>
                            <a href="resultado.php">
                                <button>Abrir</button>
                            </a>                            

                        </div>
                    </div>
                </div>
                


    <!-- Segunda opção -->
                <div class="Div2">
                    <form method="post" action="consulta.php?#popup1" id="consultas">                  
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">
                        <br/>
                        <a href="#popup1">
                        <button class="btn btn-primary form-control">Consultar</button>
                        </a>
                    <!-- </div> -->
                    </form>
                </div>
    <!-- Popup da segunda opção -->
                    <div id="popup1" class="overlay">
                    <div class="popup">
                        <h3>Resultados</h3>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                          
                            Nome: Josnel Teste da Silva
                           <br /> 
                            CPF: 000 111 222 33
                          
                            <br/><hr/>
                            <a href="resultado.php">
                                <button>Abrir</button>
                            </a>
                          

                        </div>
                    </div>
                </div>
           
<!-- Terceira opção -->
   <div class="Div3">
     <form method="post" action="consulta.php?#popup2" id="consultas">                  
           
              <input type="text" class="form-control" id="imei" name="imei" placeholder="IMEI" required="requiored">
              <br/>
              <a href="#popup2">
              <button class="btn btn-primary form-control">Consultar</button>
               </a>
              </form>
               </div>
         
<!-- Popup da terceira opção -->

<div id="popup2" class="overlay">
                    <div class="popup">
                        <h3>Resultados</h3>
                        <a class="close" href="#">&times;</a>
                        <div class="content">

                            SN: 0001
                            <br />
                            Samsung A20

                            <br/><hr/>
                            <a href="resultado.php">
                                <button>Abrir</button>
                            </a>
                          
                        </div>
                    </div>
                </div>
                
</div>
</body>
</html>