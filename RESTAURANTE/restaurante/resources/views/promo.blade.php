<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Restaurante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ofertas') }}">ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('promo') }}">promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ubicacion') }}">ubicaion</a>
      </li>
      </li><li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <h1>promos</h1>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Cuerpo</h2>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, commodi esse quidem laboriosam ea officiis alias, ut accusantium vel nobis quia debitis saepe id atque nisi corporis? Nihil, sit doloribus.
        </div>
    </div>
</div>
   <footer>
    <div class="container p-5">
        <h2 class="text-center">Footer</h2>
        <div class="row">
            <div class="col-md-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque quam laudantium necessitatibus quae placeat ad exercitationem laboriosam repellendus, quisquam harum aperiam dicta assumenda delectus dolores sapiente iste ipsa. Dolores, repellendus?</div>
            <div class="col-md-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque quam laudantium necessitatibus quae placeat ad exercitationem laboriosam repellendus, quisquam harum aperiam dicta assumenda delectus dolores sapiente iste ipsa. Dolores, repellendus?</div>
            <div class="col-md-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque quam laudantium necessitatibus quae placeat ad exercitationem laboriosam repellendus, quisquam harum aperiam dicta assumenda delectus dolores sapiente iste ipsa. Dolores, repellendus?</div>
        </div>
    </div>
   </footer>
</body>
</html>