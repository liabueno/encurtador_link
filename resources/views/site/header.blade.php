
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
                        <a class="nav-link" href="{{ route('site.login') }}">
                            <img src="{{ asset('img/link.png') }}" class="icone" alt="">
                            Gerar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.login') }}">
                            <img src="{{ asset('img/lista.png') }}" class="icone" alt="">
                            Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.login') }}">
                            <img src="{{ asset('img/avatar.png') }}" class="icone" alt="">
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>