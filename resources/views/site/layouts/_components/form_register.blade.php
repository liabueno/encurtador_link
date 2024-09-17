{{ $slot }}         
               <form action="{{ route('site.register') }}" class="form" method="POST">
               @csrf
                    <br>
                    <label for="user_register" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="user_register" name="user_register" placeholder="Informe seu e-mail">
                    <br>
                    <label for="user_pass_register" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="user_pass_register" name="user_pass_register" placeholder="Informe sua senha">
                    <br>
                    <label for="user_pass_confirm" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="user_pass_confirm" name="user_pass_confirm" placeholder="Informe sua senha novamente">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" id="registre">Registre-se</button>
                    </div>
                </form>