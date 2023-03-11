<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=class='btn btn-sm btn'.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class= 'table table-striped table-hover table-sm'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DETALLES</th>
                                <th>PRECIO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($producs as $produc)
                            <tr>
                                <td>{{$produc->id}}</td>
                                <td>{{$produc->nombre}}</td>
                                <td>{{$produc->detalles}}</td>
                                <td>{{$produc->precio}}</td>
                                <td>
                                    <a href=""class='btn btn-sm btn-warning'>EDITAR</a>
                                    <a href=""class='btn btn-sm btn-info'>DETALLES</a>
                                    <a href=""class='btn btn-sm btn-danger'>ELIMINAR</a>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>