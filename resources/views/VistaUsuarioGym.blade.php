<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Final</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <br>
    
        <div class="top-left links"> 

        <a href="/home">Historial de pago</a>

<a href="/EstadoCuentas">  Estado de cuenta</a>

        </div>  

 
           
                <div class="top-right links">
                
                <a href="/logout">cerrar sesion</a>
                  </div>
            
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Servicios</title>
<style type="text/css">
.style1 {font-family: "Times New Roman", Times, serif;
	color: #000000;
	font-size: 36px;
	font-weight: bold;
}
</style>

</head>

<body>
<div class="title m-b-md">
<center>  GYM PADRITOS "VIVE FUERTE"</center>   
                </div>     

                <h3><center>Bienvenido a nuestro sitio web Para ponerte bien mamado</center>    </h3>    
        </div>
<div>
            @yield('content')
</div>
<br>
<br>
<br>
    </body>
</html>
