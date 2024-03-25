@include('layouts.styles')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5">
        <p class="navbar-brand">
            <img src="{{ asset('images/MSA.jpeg') }}" alt="logo_super" width="40" height="40">
            <span class="smlttr">Aldape</span>
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 flxNav">
                <li class="nav-item"><a href="{{ route('admin.home.index') }}" class="nav-link"><i
                            class="bx bx-home-alt"></i>¿Qué llevarás
                        hoy?</a></li>
                <li class="nav-item"><a href="{{ route('admin.home.pedidos') }}" class="nav-link"><i
                            class="bx bx-package"></i>Pedidos</a></li>
                <li class="nav-item"><a href="{{ route('admin.home.cart') }}" class="nav-link"><i
                            class='bx bx-cart'></i>Carrito</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bx bx-user"></i>Cuenta</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bx bx-help-circle"></i>Ayuda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bx bxs-dashboard"></i>Departamentos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Carnicería</a></li>
                        <li><a class="dropdown-item" href="#">Frutas y Verduras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Panadería</a></li>
                    </ul>
                </li>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 srch-inp" type="search" placeholder="Search" aria-label="Search">
                <button style="display: inline-flex; align-items:center;" class="btn btn-outline-primary"
                    type="submit"><i style="font-size: 1.255rem;" class="bx bx-search"></i></button>
            </form>
        </div>
    </div>
</nav>
