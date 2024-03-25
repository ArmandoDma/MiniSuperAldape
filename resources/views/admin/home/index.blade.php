@extends('layouts.layout')

@section('title', 'Principal')

@section('content')
    @include('layouts.styles')
    @include('layouts.navbar')

    <div class="offers_td">
        @if (isset($user))
            <p>Bienvenido, {{ $user->username }}.</p>
        @endif
        <h2>Departamentos con ofertas</h2>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1558030006-450675393462?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Ofertas de Carnicería</h4>
                    <p>Llevas más y pagas menos, ¿qué esperas? las ofertas te esperan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Ofertas de Frutas & Verduras</h4>
                    <p>Llevas más y pagas menos, ¿qué esperas? las ofertas te esperan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1592148121354-383fe3029e10?q=80&w=1967&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Ofertas de Panadería</h4>
                    <p>Llevas más y pagas menos, ¿qué esperas? las ofertas te esperan.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
