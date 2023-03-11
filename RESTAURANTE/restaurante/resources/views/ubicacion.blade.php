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
<div class="container col-md-8 ">
   <footer>
    <div class="container p-7">
        <h2 class="text-center">Ubicacion</h2>
        <div class="row">
            <div class="col-md-6">Puedes guiarte mediante nuestra ubicacion por medio le Maps para que te ubiques mas facil y nos puedas encontrar con mas confianza</div>
            <div class="col-md-6">Te esperamos pronto para poderte brindar nuestro mejor servicio ¡Ven pronto a disfrutar del mejor restaurante a nivel de precios, sabor y atencion hacia el cliente!</div>        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63634.858840171546!2d-74.20844936874998!3d4.561872999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f30cd0e2afd%3A0xfaa923b87b4c7593!2sLa%20Francesa%20Waffles!5e0!3m2!1ses-419!2sco!4v1677385494106!5m2!1ses-419!2sco" width="900" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </footer>   
            </div>
  
</body>
</html>