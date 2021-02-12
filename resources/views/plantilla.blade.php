<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container-flex ml-5 mr-5 mb-0">
        <div class=" display-2 pl-5 bg-primary">
            <p>Arturo Perez</p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0 ">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="/libros">Libros</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="/sobremi">Sobre Mi</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="/sugerencias">Sugerencias</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="container bg-light p-3">
        <hr>
        @yield('contenido')

    </div>




    <footer class=" bg-light text-center text-lg-start fixed-bottom">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Salutacion.com</a>
        </div>

    </footer>


</body>

</html>
