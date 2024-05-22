{{ $slot }}         
                <form action="{{ route('site.recover') }}" class="recuperar">
                    @csrf
                    <br>
                    <label for="user_recover" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="user_recover" name="user_recover" placeholder="Informe o e-mail cadastrado">
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="btn_recover" id="btn_recover">Enviar</button>
                    </div>
                </form>