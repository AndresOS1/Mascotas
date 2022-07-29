<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    

    <div class="row justify-content-center my-5">
        <div class="col-3  offset-lg-0">
            <div class="card text-center ml-4 ml-sm-5 ml-lg-0" id="card-form">
                <div class="card-body justify-content-center border border-primary  rounded">
                    <div class="container">
                        <form action=" {{ route('actualizarMascota', $mascota->id)}}"  method="POST">
                            @method ('PUT')
                            @csrf
                            <div class="row my-5 ">
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <h4>Registro Mascota</h4>
                                </div>
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$mascota->nombre}}" name="nombre"
                                        placeholder="Nombre de la Mascota" required>
                                </div>
                
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$mascota->imagen}}" name="imagen"
                                        placeholder="imagen de la Mascota" required>
                                </div>
                
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <select class="form-select" aria-label="Default select example" name="genero_id" required>
                                        <option selected>Genero</option>
                                        @foreach ($genero as $generos)
                                            <option value="{{ $generos->id }}">{{ $generos->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <select class="form-select" aria-label="Default select example" name="categoria_id" required>
                                        <option selected>Categoria</option>
                                        @foreach ($categoria as $categorias)
                                            <option value="{{ $categorias->id }}">{{ $categorias->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <select class="form-select" aria-label="Default select example" name="raza_id" required>
                                        <option selected>Raza</option>
                                        @foreach ($raza as $razas)
                                            <option value="{{ $razas->id }}">{{ $razas->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                
                
                                <div class="form-group col-10 col-sm-8 offset-sm-2 col-lg-8 offset-lg-2 my-3">
                                    <button type="submit" class="btn btn-primary" name="sumit" id="id_sumit">Registrar
                                        Mascota</button>
                                </div>
                
                
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
