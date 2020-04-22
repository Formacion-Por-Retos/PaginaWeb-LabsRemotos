<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div align="center">


    <h1>PRUEBA DE ACTUALIZACIÓN DE ESTADOS EN LABVIEW</h1>
    <br>
    <form action="https://apitestlabview.herokuapp.com/boton1" method="post">
    <button class="btn btn-primary" name="dato1" value="true" >Activar Primer Bombillo </button>
</form>
<form action="https://apitestlabview.herokuapp.com/boton1" method="post">
    <button class="btn btn-outline-primary" name="dato1"  value="false" >Desactivar Primer Bombillo </button>
</form>
    <br>
<form action="https://apitestlabview.herokuapp.com/boton2" method="post">
    <button class="btn btn-warning" name="dato2"  value="true" >Activar Segundo Bombillo </button>
</form>

<form action="https://apitestlabview.herokuapp.com/boton2" method="post">
    <button class="btn btn-outline-warning" name="dato2"  value="false" >Desactivar Segundo Bombillo </button>
</form>

    <br>

<form action="https://apitestlabview.herokuapp.com/boton3" method="post">
    <button class="btn btn-danger" name="dato3"  value="true" >Activar Tercer Bombillo </button>
</form>

<form action="https://apitestlabview.herokuapp.com/boton3" method="post">
    <button class="btn btn-outline-danger" name="dato3" value="false" >Desactivar Tercer Bombillo </button>
</form>

    <br>
    <br>
    <br>
    <br>

    <form action="https://apitestlabview.herokuapp.com/addElemento" method="post">

        <div class="form-group row">
            <label for="email_address" class="col-md-4 col-form-label text-md-right"" >Texto:</label>
            <div class="col-md-6">
                <input type="text" id="elemento" class="form-control" name="elemento" required autofocus style="text-transform:uppercase">

                <br>
                <br>
                <button type="submit" class="btn btn-success">Enviar Texto</button>
            </div>
        </div>
    </form>


</div>





</body>
</html>
