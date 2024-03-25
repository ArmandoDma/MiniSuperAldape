@extends('layouts.layout')
@section('title', 'Reservar Horario')
@include('layouts.styles')

@section('content')
    @include('layouts.navbar')

    <div class="responsive mt-3 ct-dir">
        <div class="btnBck">
            <a href="{{ route('admin.home.pedidos') }}"><i class="bx bx-chevron-left"></i>Regresar</a>
            <h2>Reservar Horario </h2>
        </div>

        <div class="fr-dir">
            <div class="form-group slct-opt">
                <label for="tienda" id="tienda_lbl" class="active">Recoger en tienda</label>
                <label for="domicilio" id="domicilio_lbl">Envío a domicilio</label>
                <input type="radio" id="tienda" name="tipo_reserva" value="tienda" checked>
                <input type="radio" id="domicilio" name="tipo_reserva" value="domicilio">
            </div>

            <div class="items" id="items" data-valor="{{ $id }}"></div>

            <div id="tiendaForm">
                <div class="card mb-3">
                    <div class="card-header">
                        Recoger en Tienda
                    </div>
                    <div class="card-body">
                        <p>Selecciona un horario para recoger tu pedido en nuestra tienda.</p>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fecha_recogida">Fecha de Recogida:</label>
                                <input type="date" name="fecha_recogida" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="hora_recogida">Hora de Recogida:</label>
                                <input type="time" name="hora_recogida" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Reservar Horario</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="domicilioForm" style="display: none;">
                <div class="card mb-3">
                    <div class="card-header">
                        Envío a Domicilio
                    </div>
                    <div class="card-body">
                        <p>Selecciona un horario para recibir tu pedido en tu domicilio.</p>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fecha_entrega">Fecha de Entrega:</label>
                                <input type="date" name="fecha_entrega" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="hora_entrega">Hora de Entrega:</label>
                                <input type="time" name="hora_entrega" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección de Entrega:</label>
                                <textarea name="direccion" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Reservar Horario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/reservar.js')}}"></script>
    </div>


@endsection
