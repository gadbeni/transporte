<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos del asociado</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
</head>
<body>
    @if (isset($error))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @else
        <!--skills-->
        <section class="specialties" id="specialties">
          <div class="container">
              <div class="text-center">
                <h2 style="color: green">Datos del Asociado</h2>
              </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12" style="">
                <div class="skills" style="max-width: 600px; margin: 0 auto">
                <h3 class="main text-center">ASOCIADOS</h3>
                  <div class="restitem clearfix">
                    <div class="rm-thumb" style="background-image: url(images/2.png)">
                    </div>
                    <h5>{{ $associate->full_name }}</h5>
                    <p><strong>{{ $associate->organization->affiliation_type}}:</strong> {{ $associate->organization->legal_name}}</p>
                    <p><strong>Nro Documento:</strong> {{ $associate->ci }}: {{ $associate->expedition_ci }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container" style="margin-top: 2rem">
            <div class="row">
              @if ($associate->vehicles->count() > 0)
              <div class="col-md-12">
                <div class="skills ">
                  <h3 class="main text-center">VEHICULOS</h3>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Foto</th>
                          <th scope="col">Clase</th>
                          <th scope="col">Marca</th>
                          <th scope="col">Año</th>
                          <th scope="col">N° de Placa</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($associate->vehicles as $vehicle)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td><img src="{{ asset('storage/'.$vehicle->photo) }}" alt="" height="100"></td>
                          <td>{{ $vehicle->class }}</td>
                          <td>{{ $vehicle->brand}}</td>
                          <td>{{ $vehicle->year }}</td>
                          <td>{{ $vehicle->number_plate }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  
                </div>
                <br>
              </div>   
            @endif
            </div>
          </div>          
        </section>
    @endif
    
</body>
</html>