{{ $slot }}         
            <form action="{{ route('site.login') }}" class="form">
                @csrf
                    <br>
                    <label for="user_email" class="form-label mt-3">E-mail</label>
                    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Informe seu e-mail">
                    <br>
                    <label for="user_pass" class="form-label mt-3">Senha</label>
                    <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Informe sua senha">
                    <div class="text-center">
                        <button type="submit" class="btn btn-info mt-5 mb-4" id="btn">Acessar</button>
                        <br>
                        <a class="esqueci" href="{{ route('site.recover') }}">Esqueci minha senha</a>     
                    </div>
                </form>