<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Sistema de Adoção</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fa;
            height:100vh;
        }

        .login-container{
            min-height:100vh;
        }

        .card-login{
            width:100%;
            max-width:450px;
            border:none;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,.10);
        }

        .logo{
            width:100px;
        }

    </style>

</head>

<body>

<div class="container">
<?php

// require_once '../Config/conexao.php';

echo "Conectado com sucesso!";
?>
    <div class="row justify-content-center align-items-center login-container">

        <div class="col-md-5">

            <div class="card card-login">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <img src="assets/img/logo.png"
                             class="logo mb-3">

                        <h3>
                            Sistema de Adoção Guarapet
                        </h3>

                        <p class="text-muted">
                            Painel Administrativo
                        </p>

                    </div>

                    <form method="POST"
                          action="validar-login.php">

                        <div class="mb-3">

                            <label class="form-label">
                                E-mail
                            </label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Senha
                            </label>

                            <input type="password"
                                   name="senha"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="form-check mb-4">

                            <input class="form-check-input"
                                   type="checkbox">

                            <label class="form-check-label">
                                Lembrar acesso
                            </label>

                        </div>

                        <button type="submit"
                                class="btn btn-success w-100">

                            Entrar no Sistema

                        </button>

                    </form>

                    <div class="text-center mt-4">

                        <a href="#">
                            Esqueci minha senha
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
