
    <!-- MENU NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
            <a class="navbar-brand" href=" {{ route('site.index') }} ">EncurtaLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('site.index') }}">
                            <img src="{{ asset('img/home.png') }}" class="icone" alt="">
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.generate') }}">
                            <img src="{{ asset('img/link.png') }}" class="icone" alt="">
                            Gerar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.list') }}">
                            <img src="{{ asset('img/lista.png') }}" class="icone" alt="">
                            Listar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/avatar.png') }}" class="icone" alt="">
                            Usuário
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('site.login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('site.recover') }}">Recuperar Senha</a></li>
                            <li><a class="dropdown-item" href="{{ route('site.register') }}">Cadastre-se</a></li>
                            {{-- <li><a class="dropdown-item" href="{{ route('site.profile') }}">Profile</a></li> --}}  
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('site.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.contact') }}">
                            <img src="{{ asset('img/contate.png') }}" class="icone" alt="">
                            Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>