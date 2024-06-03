@if ($associate)
<section>
    <div class="section-title" style="margin-top: 50px">
        <h2>Asociado</h2>
        <h3><span>Datos del Asociado</span></h3>
        @if (!isset($error))
        <p>La siguiente información muestra los datos del asociado sus vehiculos registrado.</p>
        @endif
    </div>
    @if (isset($error))
    <div class="row m-5">
        <div class="col-md-6">
            <div class="panel-body" style="padding-top:0;">
                <p>Documento de identificación</p>
            </div>
            <div class="panel-heading" style="border-bottom:0;">
                <h3 class="panel-title">{{ $associate->ci }} {{ $associate->expedition_ci }}</h3>
            </div>
        </div>
        <div class="col-md-6" style="text-align: right">
            <div class="panel-body" style="padding-top:0;">
                <p>Fecha registro</p>
            </div>
            <div class="panel-heading" style="border-bottom:0;">
                <h5 class="panel-title">{{ date('d/m/Y H:i:s', strtotime($associate->created_at)) }} <small>{{
                        \Carbon\Carbon::parse($associate->created_at)->diffForHumans() }}</small></h5>
            </div>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-3">
            <img src="{{ asset('images/not-found.png') }}" width="150px" alt="Not Found">
            <h3 class="text-muted mt-3">{{ $error }}</h3>
        </div>
    </div>
    <div class="row m-5">
        <div class="alert alert-danger">
            El asociado con documento de identidad <strong>{{ $associate->ci }} {{ $associate->expedition_ci }}</strong>
            no se encuentra activo.
        </div>
    </div>
    @else
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Documento de identificación</h5>
                    <div class="card-body">
                        <p>{{ $associate->ci }} {{ $associate->expedition_ci }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Fecha de registro</h5>
                    <div class="card-body">
                        <p>{{ date('d/m/Y H:i:s', strtotime($associate->created_at)) }} <small>{{
                                \Carbon\Carbon::parse($associate->created_at)->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                @if ($associate->organization)
                <div class="card">
                    <h5 class="card-title">Afiliación a organización</h5>
                    <div class="card-body">
                        <p><b>Tipo de organización: </b>{{ $associate->organization->affiliation_type }}</p>
                        <p><b>Nombre de la organización:</b> {{ $associate->organization->legal_name }}</p>
                    </div>
                </div>
                @else
                <div class="card">
                    <h5 class="card-title">Afiliación a organización</h5>
                    <div class="card-body">
                        <p>Sin organización</p>
                    </div>
                </div>
                @endif
                <div class="card">
                    <h5 class="card-title">Información personal</h5>
                    <div class="card-body row">
                        <div class="col-md-8">
                            <p><b> Nombre Completo: </b>{{ $associate->full_name }}</p>
                            <p><b>Estado: </b><span class="bg-success text-white">Activo</span></p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p><b>Foto:</b></p>
                            <img src="{{ asset('storage/'.$associate->image) }}" alt="" class="img-fluid"
                                style="width: 80px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-5">
        <div class="col-md-12">
            <h4 class="display-9 text-uppercase text-secondary border-bottom pb-2">Vehiculos del Asociado</h4>
        </div>
    </div>


    <div class="row m-5">
        @if ($associate->vehicles->count() > 0)
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped  table-bordered">
                    <thead class="thead-dark bg-success">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col" class="text-nowrap text-white text-center">Foto</th>
                            <th scope="col" class="text-nowrap text-white">Clase</th>
                            <th scope="col" class="text-nowrap text-white">Marca</th>
                            <th scope="col" class="text-nowrap text-white">Año</th>
                            <th scope="col" class="text-nowrap text-white">N° de Placa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($associate->vehicles as $vehicle)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->iteration}}</th>
                            <td class="text-center"><img src="{{ asset('storage/'.$vehicle->photo) }}" alt=""
                                    class="img-fluid" style="max-width: 100px;"></td>
                            <td>{{ $vehicle->class }}</td>
                            <td>{{ $vehicle->brand}}</td>
                            <td>{{ $vehicle->year }}</td>
                            <td>{{ $vehicle->number_plate }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        @else
        <div class="col-md-12">
            <div class="alert alert-warning">
                El asociado no tiene vehiculos registrados.
            </div>
        </div>
        @endif
    </div>

    <div class="row m-5">
        <div class="col-md-12">
            <h4 class="display-9 text-uppercase text-secondary border-bottom pb-2">Ruta de la organización</h4>
        </div>
    </div>

    <div class="row m-5">
        @if ($associate->organization->routes->count() > 0)
        <div class="col-md-12">
            <h4 style="text-align: center" "text-decoration: underline">Ruta del Asociado</h4> <br>
            <div class="table-responsive">
                <table class="table table-striped  table-bordered">
                    <thead class="thead-dark bg-success">
                        <tr>
                            <th scope="col" class="text-nowrap text-white"> N°</th>
                            <th scope="col" class="text-nowrap text-white"> LOCALIDAD ORIGEN</th>
                            <th scope="col" class="text-nowrap text-white"> LOCALIDAD DESTINO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($associate->organization->routes as $route)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td style="text-transform: uppercase;"> <strong>Provincia:</strong> {{
                                $route->origin->province }}<strong> -- Ciudad: </strong> {{ $route->origin->municipality
                                }}</td>
                            <td style="text-transform: uppercase;"> <strong>Provincia:</strong> {{
                                $route->destination->province }}<strong> -- Ciudad:
                                </strong>{{$route->destination->municipality}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        @else
        <div class="col-md-12">
            <div class="alert alert-warning">
                El asociado no tiene rutas registradas.
            </div>
        </div>
        @endif
    </div>

    @endif
    <hr>
</section>
@else
<section>
    <div class="section-title" style="margin-top: 50px">
        <h2>Asociado</h2>
        <h3><span style="color: red;">No encontrado</span></h3>
        <p>No se ha encontrado un asociado con esa información.</p>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-3">
            <img src="{{ asset('images/not-found.png') }}" width="150px" alt="Not Found">
            <h3 class="text-muted mt-3"></h3>
        </div>
    </div>
    <div class="row m-5">
        <div class="alert alert-danger">
            No se ha encontrado un asociado con la información proporcionada.
        </div>
    </div>
    <hr>
</section>
@endif
