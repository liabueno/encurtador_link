{{ $slot }}         
    <form action="{{ route('app.generate') }}" method="POST">
        @csrf
            <label for="inputURL" class="col-form-label label">https://localhost/</label>
            </div>
            <div class="col-md-auto col-5">
                <input type="text" id="inputURL" name="inputURL" class="form-control campo" placeholder="Informe o restante da URL">
            </div>
        </div>
        <div class="row g-3 align-items-center justify-content-center">
            <div class="col-md-auto col-5">
                <label for="inputURL2" class="col-form-label label2">Minha URL</label>
            </div>
            <div class="col-md-auto col-5">
                <input type="text" id="inputURL2" name="inputURL2" class="form-control campo2" placeholder="Informe como deseja sua URL">
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-auto">
                <button type="submit" class="btn btn-success gerar">Gerar</button>
            </div>
        </div>
    </form>