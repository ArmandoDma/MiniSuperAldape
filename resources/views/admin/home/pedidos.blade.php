@extends('layouts.layout')
@section('title', 'Pedidos')

@include('layouts.styles')

@section('content')
    @include('layouts.navbar')

    <div class="nsecc">
        <div class="btn-pedidos" id="btn-pedidos">
            <div class="image"><span><img src="{{ asset('images/using-phone.png') }}" alt=""></span>
                <p>Elige como quieres recibir el pedido |</p>
            </div>
            <div class="ic-tggle"><i class="bx bx-chevron-down" id="btn-tggle"></i></div>
        </div>
        <div class="choose-opt" id="choose-opt">
            <label for="pickup"><span><img src="{{ asset('images/pickup.png') }}" alt=""></span>Recoger en
                tienda</label>
            <input type="radio" name="delivery_method" id="pickup" value="pickup">
            <label for="delivery"><span><img src="{{ asset('images/delivery-bike.png') }}" alt=""></span>Pedir a
                domicilio</label>
            <input type="radio" name="delivery_method" id="delivery" value="delivery">
        </div>
        <div class="loc-btn">
            <button class="ubi" id="ubi-btn"><i class="bx bx-map"> <span id="locText">Permitir
                        Ubicación</span></i></button>
            <form action="" method="POST" id="fr-ubi" class="fr-ubi">
                @csrf
                <input type="text" placeholder="Dirección" class="form-control" name="locinput" id="locinput">
                <input type="submit" id="subDir" class="btn btn-secondary" value="Agregar dirección">
            </form>
        </div>
    </div>

    <div class="items" id="items"></div>

    <div class="Map" id="Map"></div>

    <script src="{{asset('js/pedidos.js')}}"></script>

@endsection
