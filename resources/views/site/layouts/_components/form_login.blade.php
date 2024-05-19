                <form action="" class="form">
                    <h1 class="text-center">Login</h1>
                    <br>
                    <label for="inputEmail4" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Informe seu e-mail">
                    <br>
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Informe sua senha">
                    <div class="text-center">
                        <button type="submit" class="btn btn-info" id="btn"><a class="acessar" href="{{ route('site.index') }}">Acessar</a></button>
                        <br>
                        <a class="esqueci" href="{{ route('site.recover') }}">Esqueci minha senha</a>     
                    </div>
                </form>