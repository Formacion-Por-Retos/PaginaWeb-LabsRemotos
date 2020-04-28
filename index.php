<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laboratorios Remotos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                                    <div class="card-header">Laboratorio Remoto</div>

                                    <div class="card-body">

                                        <h1>Bienvenido al Laboratorio Remoto #1</h1>
                                        <br>

                                        <div style="text-align:center">



                                        <form action="https://apitestlabview.herokuapp.com/boton1" method="post">
                                            <button class="btn btn-primary" name="dato1" value="true" >Activar Primer Bombillo </button>
                                        </form>
                                            <br>
                                        <form action="https://apitestlabview.herokuapp.com/boton1" method="post">
                                            <button class="btn btn-outline-primary" name="dato1"  value="false" >Desactivar Primer Bombillo </button>
                                        </form>
                                        <br>
                                        <form action="https://apitestlabview.herokuapp.com/boton2" method="post">
                                            <button class="btn btn-warning" name="dato2"  value="true" >Activar Segundo Bombillo </button>
                                        </form>
                                            <br>
                                        <form action="https://apitestlabview.herokuapp.com/boton2" method="post">
                                            <button class="btn btn-outline-warning" name="dato2"  value="false" >Desactivar Segundo Bombillo </button>
                                        </form>

                                        <br>

                                        <form action="https://apitestlabview.herokuapp.com/boton3" method="post">
                                            <button class="btn btn-danger" name="dato3"  value="true" >Activar Tercer Bombillo </button>
                                        </form>
                                            <br>
                                        <form action="https://apitestlabview.herokuapp.com/boton3" method="post">
                                            <button class="btn btn-outline-danger" name="dato3" value="false" >Desactivar Tercer Bombillo </button>
                                        </form>

                                        <br>
                                        <br>

                                        <form action="https://apitestlabview.herokuapp.com/addElemento" method="post">
                                                <label for="email_address">Mensaje:</label>
                                                    <input type="text" id="elemento" class="form-control" name="elemento" required autofocus style="text-transform:uppercase">
                                                    <br>
                                                    <button type="submit" class="btn btn-success">Enviar Texto</button>
                                        </form>

                                            <br>
                                            <br>

                                            <form action="https://apitestlabview.herokuapp.com/updatehardware" method="post">
                                                <button class="btn btn-danger" name="statushardware"  value="true" >Activar Hardware </button>
                                            </form>
                                            <br>
                                            <form action="https://apitestlabview.herokuapp.com/updatehardware" method="post">
                                                <button class="btn btn-outline-danger" name="statushardware" value="false" >Desactivar Hardware </button>
                                            </form>



                                        </div>

                                        </div>




                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </main>
        </div>
    </div>
    </div>
</section>










</body>
</html>
