@extends('layouts.layout')
@include('layouts.styles')
@section('title', 'Carrito')

@section('content')
    @include('layouts.navbar')

    <div class=" ct-cart mt-5">
        <h2 class="mb-4">Carrito de Compra</h2>
        <div class="ct-cart-it">
            @foreach ($shoppingCartItems as $item)
                <div class="col">
                    <div class="card">
                        <div class="card-body card_prd">
                            <form action="{{route('admin.home.cartDel', ['product_Id' => $item->product_id])}}" method="POST" class="img-card">
                                @csrf
                                <img src="{{ $item->image_product }}" alt="{{ $item->description }}">
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                            <div class="card-info">
                                <h5 class="card-title">{{ $item->name_product }}</h5>
                                <div class="iptPzsGr">
                                    <label for="piecesRadio" id="pzas" class="active">Piezas</label>
                                    <label for="gramsRadio" id="grams">Gramos</label>
                                    <input type="radio" id="piecesRadio" name="unit" value="pieces" checked>
                                    <input type="radio" id="gramsRadio" name="unit" value="grams">
                                </div>
                            </div>
                            <div class="card-rt">
                                <h3 id="totalPrice" class="totalPrice">{{'$'. $item->price}}</h3>
                                <p class="card-text dfltP">{{ $item->price }}</p>
                                <div class="iptNum">
                                    <input type="number" id="quantityInput" class="quantityInput" value="1" min="1" max="100">
                                    <button onclick="" class="dec">-</button>
                                    <button onclick="" class="inc">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="ct-car mt-4">
            <div class="ct-cart-it">
                <div class="crd">
                    <div class="card_prd ticket">
                        <h5 class="card-title">Resumen de Compra</h5>
                        <p class="card-text" id="subtotal">Subtotal: {{ $sub }}</p>
                        <p class="card-text" id="total">Total: {{ $totalString }}</p>
                        <button class="btn btn-primary btn-cart">Continuar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/cart.js')}}"></script>

@endsection
