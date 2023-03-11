<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url ('css/stile.css')}}">
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
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">MENU</h2>
        </div>
    </div>
</div>
<div class="container p-5">
        <div class="row">
            <div class="col-md-4"><h3>Perros Calientes</h3>
 Ven a probar un dlicioso perro caliente para poder calmar un antojito porque todos nos merecemos dar un gusto 
<br>
 <img clas="img-ofertas" src="img/perros.jpeg" alt="">
</div>
         
          <div class="col-md-4"><h3> Hamburguesas artesanales</h3>
            Te invitamos en este dia  para que almuerces con nuestra hamburguesa especial porque todos los dias no pueden ser iguales

            <img clas="img-ofertas" src="img/hambur.jpeg " alt="">
          </div>
            
           
            <div class="col-md-4"><h3>Bebidas</h3>Acompaña nuestros perros, hamburguesas y snacks con un delicioso jugo que te refresque y te endulce un poco mas tu dia 
            <img clas="img-ofertas" src="img/bebidas.jpeg" alt="">
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