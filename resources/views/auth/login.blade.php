@extends('layouts.layout')

@section('title', '¡Inicia Sesión Para Encontrar Promociones!')

@section('content')
    <div class="container responsive ct-lg d-flex align-items-center">
        <form action="{{route('auth.login')}}" method="POST" class="d-flex flex-column flx-frm-lg align-items-center">
            @csrf
            <div class="lg-msa">
                <img src="{{asset('images/MSA.jpeg')}}" alt="logo_MSA">
                <p>¡Con la misma calidad del super pero, ahora la llevamos a tu casa!</p>
                <span><i class='bx bx-baguette'></i><i class='bx bx-cheese'></i><i class='bx bx-bowl-rice'></i></span>
            </div>
            <input type="text" name="form_uname" placeholder="Ingresa tu usuario/correo electronico" class="form-control" id="form_uname">
            <input type="password" name="form_upass" id="form_upass" placeholder="Contraseña" class="form-control">
            <input type="submit" class="btn-sub-lg" value="Continuar">
            <p>¿Aún no tienes cuenta?</p>
            <button type="button" onclick="redirect()" class="btn-re-lg" role="button">Crear cuenta</button>
        </form>
    </div>

    <script type="text/javascript">
        function redirect(){
            let url = 'register';
            window.location.href = url;
        }
    </script>
@endsection
