<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Librerias Pujols</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-info ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong>EGPM</strong></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="/index.php">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="autores.php">Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="contactos.php">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bg-primary text-dark py-1">
            <div class="container py-3">
                <h1 class="text-center ">
                    Librerias Pujols
                </h1>
            </div>
            <div>
                <p class="text-center fs-6 ">
                    "Los libros son la comida del alma." - Platón, filósofo griego.
                </p>
            </div>
        </div>
    </header>
    <article>
        <div class="text-center text-secondary fs-2">
            <h2>Nuestros libros</h2>
        </div>
    </article>
    <main>
        <div class="container">
            <div class ="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="image/image.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Titulo</h5>
                            <p class="card-text">Precio</p>
                            <p class="card-text">Categoria</p>
                            <p class="card-text">Fecha de publicacion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
