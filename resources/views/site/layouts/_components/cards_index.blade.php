 <!-- CARDS -->
 <div class="card-group">
        <div class="card text-center">
            <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Livre-se de URLs Longas!</h5>
                <p class="card-text">Facilite seu acesso aos seus sites preferidos</p>
                <button class="btn btn-info info"> <a class="chamada" href="{{ route('app.generate') }}">Gerar URL Encurtada</a></button>
            </div>
        </div>
        <div class="card text-center">
            <img src="{{ asset('img/card2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tenha a lista de seus Links!</h5>
                <p class="card-text">Manipule seus links de uma forma simples e eficiente</p>
                <button class="btn btn-info info"><a class="chamada" href="{{ route('app.list') }}">Listar URLs</a></button>
            </div>
        </div>
        <div class="card text-center">
            <img src="{{ asset('img/card3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Faça seu cadastro!</h5>
                <p class="card-text">Desfrute de nossos serviços</p>
                <button class="btn btn-info info"><a class="chamada" href="{{ route('site.register') }}">Cadastre-se</a></button>
            </div>
        </div>
    </div>