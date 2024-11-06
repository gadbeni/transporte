@extends('frontend.welcome')

@section('content')
<main id="main">
    <div class="container" data-aos="fade-up">
        <div id="div-search">
        </div>
        @if ($associate->organization)
            <section id="counts">
                <div class="section-title" style="margin-top: 50px">
                    <h2>Asociado</h2>
                    <h3><span>Datos del Asociado</span></h3>
                    @if (!isset($error))
                    <p>La siguiente información muestra los datos del asociado sus vehiculos registrado.</p>
                    @endif
                </div>
                @if (isset($error))
                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <img src="{{ asset('images/not-found.png') }}" width="150px" alt="Not Found">
                        <h3 class="text-muted mt-3">{{ $error }}</h3>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="alert alert-danger">
                        El asociado con documento de identidad <strong>{{ $associate->ci }} {{ $associate->expedition_ci
                            }}</strong> no se encuentra activo.
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
                                        <th scope="col"> </th>
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
                    @if ($organization->routes->count() > 0)
                    <div class="col-md-12">
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
                                    @foreach ($organization->routes as $route)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td style="text-transform: uppercase;"> 
                                            <strong>Provincia:</strong> 
                                                {{ $route->origin  ? $route->origin->province : "No Encontrado" }}
                                            <strong> -- Ciudad: </strong> 
                                                {{ $route->origin ? $route->origin->municipality : "No Encontrado" }}
                                        </td>
                                        <td style="text-transform: uppercase;">
                                            <strong>Provincia:</strong>
                                            {{ $route->destination ? $route->destination->province : "No Encontrado" }}
                                                <strong> -- Ciudad:
                                            </strong>{{ $route->destination ? $route->destination->municipality : "No Encontrado"}}
                                        </td>
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
            <section id="counts">
                <h2 class="text-center text-danger">ATENCIÓN</h2>
                <p class="text-center text-danger">Este asociado no esta afiliado a una organización</p>
            </section>
        @endif
    </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contácto</h2>
                <h3><span>Contáctate con nosotros</span></h3>
                <p>Para obtener más información puedes contactarnos por medio de cualquiera de los canales de
                    comunicación descritos a continuación.</p>
            </div>

            <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.2034342454992!2d-64.90438077082753!3d-14.83570830295541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd6fd5b87370df%3A0x47918f6983c7c6c8!2sGobierno%20Aut%C3%B3nomo%20Departamental%20Del%20Beni!5e0!3m2!1ses-419!2sbo!4v1626364207037!5m2!1ses-419!2sbo"
                        frameborder="0" style="border:0; width: 100%; height: 360px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Nuestra Dirección</h3>
                                <p>{{ setting('site.direccion') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Nuestros Email</h3>
                                <p>{{ setting('site.email') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Llámanos</h3>
                                <p>{{ setting('site.telefono') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

@endsection
