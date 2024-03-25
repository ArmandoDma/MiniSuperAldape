<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MiniSuper Aldape - Haz tu mandado en linea!</title>
    <link rel="stylesheet" href="{{asset('css/styled.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/MSA.jpeg') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-lg responsive ct-ldr" id="base">
        <div class="ldr-cont">
            <img src="{{ asset('images/MSA.jpeg') }}" alt="logo de la empresa">
            <div class="cube appear">
                <div class="side"></div>
                <div class="side"></div>
                <div class="side"></div>
                <div class="side"></div>
                <div class="side"></div>
                <div class="side"></div>
            </div>
            <h5>¡Bienvenido!</h5>
        </div>
    </div>

    <script type="text/javascript">
        function redirect(){
            let inter = setInterval(() => {
                let url = `login`;
                window.location.href = url;
            }, 4000);

            setTimeout(() => {
                clearInterval(inter);
            }, 4000);
        }

        window.addEventListener('load', redirect())

    </script>

</body>

</html>
