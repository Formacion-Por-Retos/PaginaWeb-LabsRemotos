<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="login-form">
                    <div class="cotainer">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Inicio de Sesión</div>

                                    <div class="card-body">
                                        <form action="/Models/login_model.php" method="POST">

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Iniciar Sesión</button>
                                            </div>
                                    </div>
                                    </form>
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
