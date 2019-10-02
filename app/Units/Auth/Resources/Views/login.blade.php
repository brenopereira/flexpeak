<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <title>Sistema de gerenciamento da aplicação</title>

    <style type="text/css">*, html {
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: #eaeaea;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>=
<div class="login-page">
    <div class="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="logo">
                    <img src="/static/images/logo-branca.png" alt="Logo">
                </div>
                <div class="login-content">
                    <form class="login-form" method="POST" action="{{ route('auth.login.store') }}">
                        @csrf
                        <div class="login-form-inputs">
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    Seu e-mail não é válido
                                </div>
                            @endif
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    A senha digitada é inválida
                                </div>
                            @endif
                            @if(isset($message))
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endif
                            <span class="input-group">
                                <label >E-mail</label>
                                <input type="text" class="form-control" name="email" >
                            </span>
                            <span class="input-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="password">
                            </span>
                            <span class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <label class="checkbox-label">Continuar conectado</label>
                                    </label>
                                </div>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-default login-form-submit">
                            Entrar
                        </button>
                    </form>
                </div>
                <div class="row">
                    <div class="text-left col-sm-6 col-xs-6 forget-password">
                        <span class="forget-password">
                            <a href="/">Esqueceu a sua senha?</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/bundle.js"></script>

</body>
</html>
