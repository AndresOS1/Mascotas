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
        <div class="col-5 col-lg-5 offset-lg-0">
            <div class="card text-center ml-4 ml-sm-5 ml-lg-0" id="card-form">
                <div class="card-body justify-content-center border border-primary bg-primary bg-gradient rounded">
                    <h1 class="card-title mt-1 " id="title-card">Administrar Mascotas</h1>
                    <button type="button" class="btn btn-warning   mt-3">Adicionar Mascota</button>
                    @foreach ($mascotas as $mascota)
                        <div class="container">
                            <div class="row justify-content-center my-5">
                                <div class="col-8 offset-lg-0">
                                    <div class="card text-center ml-4 ml-sm-5 ml-lg-0" id="card-form">
                                        <div class="card-body justify-content-center">
                                            <div class="container d-flex">

                                                <div class="row col-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                                      </svg>
                                                </div>


                                                <div class="container d-flex">

                                                    <div class="row col-2">
                                                        <tr>
                                                        <td class="justify-content-right ms-5">{{ $mascota->nombre }}</td>
                                                        
                                                        </tr>
                                                        <div class="row col-4">
    
                                                        @foreach ($raza as $razas)
                                                            @if ($mascota->raza_id == $razas->id)
                                                                <td>{{ $razas->nombre }}</td>
                                                            @endif
                                                        @endforeach
    
                                                    </div>
                                                    </div>

                                                </div>
                                                
                                                <button type="button" class="btn btn-warning" ><a href="{{route('editarMascota', $mascota->id)}}"> actualizar</a> </button>

                                                <form  action="{{route('eliminarMascota', $mascota->id)}}" method="POST">
                                                     @method('DELETE')
                                                    <button type="button" class="btn btn-danger" ><a> eliminar</a> </button>
                                                </form>
                                               

                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>








    {{-- <div class="container">
        <div class="row">
          <div class="col mt-5">
            <h1 class="text-center">Lista Mascotas</h1>
            <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Raza</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mascota -> nombre}}</td>
                        <td>{{$mascota -> imagen}}</td>
                        @foreach ($genero as $generos)
                                    @if ($mascota->genero_id == $generos->id)
                                    <td>{{$generos -> nombre}}</td>
                                    @endif
                        @endforeach
                        @foreach ($categoria as $categorias)
                                    @if ($mascota->categoria_id == $categorias->id)
                                    <td>{{$categorias -> nombre}}</td>
                                    @endif
                        @endforeach
                        @foreach ($raza as $razas)
                                    @if ($mascota->raza_id == $razas->id)
                                    <td>{{$razas -> nombre}}</td>
                                    @endif
                        @endforeach
                      </tr>
                    @endforeach
                </tbody>
              </table>

          </div>
        </div>
      </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>
