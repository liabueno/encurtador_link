                <form action="" class="form">
                    <h1 class="text-center">Cadastro</h1>
                    <br>
                    <label for="inputEmail4" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Informe seu e-mail">
                    <br>
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Informe sua senha">
                    <br>
                    <label for="inputPassword4" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Informe sua senha novamente">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" id="registre"><a class="acessar" href="{{ route('site.index') }}">Registre-se</a></button>
                    </div>
                </form>