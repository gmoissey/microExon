<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MicroExon</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
</head>
    <body>

        <div class="header">
            <a href="#default" class="logo">MicroExon</a>
            <div class="header-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
        </div>

        @yield('content')
        @show

        <footer class="footer top-buffer">
            <div class="footer-copyright">
                <div class="container-fluid tx-light">
                    © 2015 Copyright: <a href="#"> Some Link </a>

                </div>
            </div>
        </footer>

    </body>
</html>
