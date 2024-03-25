@extends('layouts.layout')

@section('title', '¡Registrate para obtener grandes beneficios!')

@section('content')
<div class="container responsive ct-lg ct-rg d-flex align-items-center">
    <form action="{{route('auth.register')}}" method="POST" class="d-flex flex-column flx-frm-lg align-items-center">
        @csrf
        <div class="lg-msa">
            <img src="{{asset('images/MSA.jpeg')}}" alt="logo_MSA">
            <p>¡Registrate para obtener grandes beneficios!</p>
        </div>
        <div class="name-data">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo">
            <input type="email" name="euregister" id="a_paterno" class="form-control" placeholder="Correo Electronico">
            <input type="password" name="passregister" id="a_materno" class="form-control" placeholder="Contraseña">
        </div>
        <div class="unme">
            <input type="text" name="username" id="user_name" class="form-control ctrl-rg" placeholder="Usuario">
        </div>
        <div class="dirandage">
            <input type="text" name="dir" id="dir" class="form-control" placeholder="Direccion">
            <input type="text" name="age" id="age" class="form-control" placeholder="Edad">
        </div>
        <div class="tel">
            <input type="tel" name="tel" id="tel" placeholder="Teléfono">
        </div>
        <div class="genre">
            <div class="ti">
                <p>Género</p>
            </div>
            <div class="rdios">
                <select name="genre" id="genre-slct" class="form-select">
                    <optgroup>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <input type="submit" class="btn-sub-lg" value="Registrarse">
        <p>¿Ya tienes cuenta?</p>
        <button role="button" onclick="redirect()" type="button" class="btn-re-lg">Iniciar sesión</button>
    </form>
</div>

<script type="text/javascript">
    function redirect(){
        let url = 'login';
        window.location.href = url;
    }

</script>
@endsection
