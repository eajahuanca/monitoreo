<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <title>Login</title>
    
        <link rel="stylesheet" href="{{ asset('plugin/login/css/normalize.css') }}">
        <style>
            body {
                font-family: "Open Sans", sans-serif;
                height: 100vh;
                background: 50% fixed;
                background-size: cover;
            }

            @keyframes spinner {
                0% {
                    transform: rotateZ(0deg);
                }
                100% {
                    transform: rotateZ(359deg);
                }
            }
            * {
                box-sizing: border-box;
            }

            .wrapper {
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                width: 100%;
                min-height: 100%;
                padding: 20px;
                background: rgba(4, 40, 68, 0.85);
            }

            .login {
                border-radius: 2px 2px 5px 5px;
                padding: 10px 20px 20px 20px;
                width: 90%;
                max-width: 320px;
                background: #ffffff;
                position: relative;
                padding-bottom: 80px;
                box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
            }
            .login.loading button {
                max-height: 100%;
                padding-top: 50px;
            }
            .login.loading button .spinner {
                opacity: 1;
                top: 40%;
            }
            .login.ok button{
                background-color: #239B56;
            }
            .login.ok button .spinner {
                border-radius: 0;
                border-top-color: transparent;
                border-right-color: transparent;
                height: 20px;
                animation: none;
                transform: rotateZ(-45deg);
            }
            .login input{
                display: block;
                padding: 15px 10px;
                margin-bottom: 10px;
                width: 100%;
                border: 1px solid #239B56;
                transition: border-width 0.2s ease;
                border-radius: 2px;
                color: #ccc;
            }

            .login select{
                display: block;
                padding: 15px 10px;
                margin-bottom: 10px;
                width: 100%;
                border: 1px solid #239B56;
                transition: border-width 0.2s ease;
                border-radius: 2px;
                color: #239B56;
            }

            .login input + i.fa {
                color: #fff;
                font-size: 1em;
                position: absolute;
                margin-top: -47px;
                opacity: 0;
                left: 0;
                transition: all 0.1s ease-in;
            }
            .login input:focus {
                outline: none;
                color: #444;
                border-color: #239B56;
                border-left-width: 35px;
            }

            login select:focus {
                outline: none;
                color: #444;
                border-color: #239B56;
                border-left-width: 35px;
            }
            .login input:focus + i.fa {
                opacity: 1;
                left: 30px;
                transition: all 0.25s ease-out;
            }
            .login a {
                font-size: 0.8em;
                color: #2196F3;
                text-decoration: none;
            }
            .login .title {
                color: #444;
                font-size: 1.2em;
                font-weight: bold;
                margin: 5px 0 10px 0;
                border-bottom: 1px solid #eee;
                padding-bottom: 20px;
                text-align: center;
            }
            .login button {
                width: 100%;
                height: 100%;
                padding: 10px 10px;
                background: #239B56;
                color: #fff;
                display: block;
                border: none;
                margin-top: 20px;
                position: absolute;
                left: 0;
                bottom: 0;
                max-height: 60px;
                border: 0px solid rgba(0, 0, 0, 0.1);
                border-radius: 0 0 2px 2px;
                transform: rotateZ(0deg);
                transition: all 0.1s ease-out;
                border-bottom-width: 7px;
            }
            .login button .spinner {
                display: block;
                width: 40px;
                height: 40px;
                position: absolute;
                border: 4px solid #239B56;
                border-top-color: rgba(255, 255, 255, 0.3);
                border-radius: 100%;
                left: 50%;
                top: 0;
                opacity: 0;
                margin-left: -20px;
                margin-top: -20px;
                animation: spinner 0.6s infinite linear;
                transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
                box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
            }
            .login:not(.loading) button:hover {
                box-shadow: 0px 1px 3px #2196F3;
            }
            .login:not(.loading) button:focus {
                border-bottom-width: 4px;
            }
            img{
                border:8px solid #239B56;
                border-radius: 95px;
                -webkit-border-radius: 95px;
                -moz-border-radius: 95px;
                width: 250px;
                height: 70px;
            }

            footer {
                display: block;
                padding-top: 50px;
                text-align: center;
                color: #ddd;
                font-weight: normal;
                text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
                font-size: 0.8em;
            }
            footer a, footer a:link {
                color: #fff;
                text-decoration: none;
            }
        </style>
        <script src="{{ asset('plugin/login/js/prefixfree.min.js') }}"></script>
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
<body>

    <div class="wrapper">
        <form class="login" action="{{ url('/login') }}" method="POST">
            {{ csrf_field() }}
            <center>
                <img src="{{ asset('plugin/login/img/logo.jpg') }}" alt="Imagen de la Empresa"></img>
            </center>
            <!--<p class="title">Nombre de la Empresa</p>-->
            
            @if ($errors->has('us_cuenta'))
                <span class="help-block">
                    <strong style="color:red; font-size:10px;">{{ $errors->first('us_cuenta') }}</strong>
                </span>
            @endif
            <input type="text" placeholder="Usuario" name="us_cuenta" value="{{ old('us_cuenta') }}" autofocus/>
            
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong style="color:red; font-size:10px;">{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <input type="password" placeholder="Contraseña" name="password" />
            
            <select name="proyectos" id="proyectos" form="select">
                <option value="-">Seleccione Proyecto</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
            <button type="submit">
                <i class="spinner"></i>
                <span class="state">Ingresar</span>
            </button>
        </form>
    </div>

    <script src="{{ asset('plugin/login/js/index.js') }}"></script>

</body>
</html>
