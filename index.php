<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laboratorios Remotos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">url('https://fonts.googleapis.com/css?family=PT+Sans:400,700')</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<?php

?>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="login-form">
                    <div class="cotainer">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                	<style type="text/css">body{
  background-color: #0d1112;
}</style>

                                    <div class="card-header"><center>Formación por retos</center></div>

                                    <div class="card-body">

                                        <p class="reboteOut">Laboratorios Remotos un paso al futuro</p>
                                       <h6><center> por favor presione el circulo azul y escriba su texto para comenzar la prueba, cuando termine de escribir presione enter</center></h6><style type="text/css">.reboteOut {
  
  font-family: Arial;
  text-align: center;
  font-size: 30px;
  margin: 50px 20px;
  
}


.reboteOut {
 
  animation: reboteOut 10s infinite;
 
}

/* Creamos la animación (con keyframes) */

@keyframes reboteOut {
 
  25% {
    
    transform: scale(0.9);
  }
  
  50% {
     opacity: 1;
     transform: scale(1.1);
  }

  100% {
    
     transform: scale(0.0);
     opacity: 0;
    
  }

}


</style>

                                        <br>

                                        <div style="text-align:center">


                                        <br>
                                        <br>

                                        <!--form action="https://apitestlabview.herokuapp.com/addElemento" method="post">
                                                <label for="email_address">Mensaje:</label>
                                                    <input type="text" id="message" class="form-control" name="message" required autofocus style="text-transform:uppercase">
                                                    <br>
                                                    <button type="submit" class="btn btn-success">Enviar Texto</button>
                                        </form-->
                                        



<form action="https://apitestlabview.herokuapp.com/addElemento" method="post">
  <input type="text" placeholder="escriba su texto" id="massage" name="message" />
  <style type="text/css"> 

{
  background-color:#00000;
}


input[type=text  ]
{
  border:0;
  font-size:14pt;
  font-weight:900;
  width:5rem;
  height:5rem;
  cursor:pointer;
  border-radius:50%;
  border:6px solid transparent;
  transition:all 0.1s ease-out;
  background-color:hsl(207deg, 52%, 49%);
  color:transparent;
  font-family:"PT Sans", sans-serif;
}

input[type=text]::placeholder
{
  color:transparent;
}

input[type=text]:focus
{
  background-color:white;
  padding:1rem 1rem;
  border-radius:0.75rem;
  width:15rem;
  height:1rem;
  outline:0;
  border-color:#000;
  transition:all 0.2s ease-out;
  color:black;
}

input[type=text]:focus::placeholder
{
  color:#000;
}

input[type=text]:focus+button
{
  opacity:1;
}

</style>
 </form>



                                            <br>
                                            <br>
                                                <form action="https://apitestlabview.herokuapp.com/updatehardware" method="post">
                                                <button class="btn btn-primary btn-lg btn-block" name="statushardware"  value="true">Activar Hardware </button>
                                            </form>
                                            <br>
                                            <form action="https://apitestlabview.herokuapp.com/updatehardware" method="post">
                                                <button class="btn btn-default btn-lg btn-block" name="statushardware" value="false" >Desactivar Hardware </button>
                                            
    </form>
</div>
</div>



                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

           </main>
        <</div>
    </div>
    </div>










</body>
</html>
