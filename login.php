
<?php
  include './templates/header.php';

  if ($userController->isUserLoggedIn()) {
    header('Location: panel.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRUPO 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

    
    <?php include './templates/nav.php' ?>

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <h3>Iniciar Sesion</h3><hr>
                    <form id="login-form">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                    <div class="alert alert-danger mt-4 d-none" id="error-message"></div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script>
        document.getElementById('login-form').onsubmit = (e) => {
            e.preventDefault();

            const errorMessage = document.getElementById('error-message');
            errorMessage.classList.add('d-none');
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email  || !password){
                return;
            }

            axios.post('api/login.php', { email: email, password: password })
                .then(res => {
                    if (res.data.secondfactor) {
                        window.location = 'login-secondfactor.php';
                    } else {
                        window.location = 'panel.php';
                    }
                })
                .catch(err => {
                    errorMessage.innerText = err.response.data;
                    errorMessage.classList.remove('d-none');                    
                });
        }
    </script>
</body>
</html>




