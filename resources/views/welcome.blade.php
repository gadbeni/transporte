@extends('layouts.app')

@section('title', 'Transporte')

@section('content')
    @include('layouts.frontend.about')

    @include('layouts.frontend.services')
    
    @include('layouts.frontend.portafolio')

    @include('layouts.frontend.testimonials'
    )
    @include('layouts.frontend.team')

    @include('layouts.frontend.contact')

    @include('layouts.frontend.footer')

@endsection