{{ $slot }}         
                <form action="{{ route('site.contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Redija sua mensagem">
                    </div>
                    <div class="mb-3 mt-4">
                        <select name="motivo" id="motivo" class="form-select">
                            <option selected>Qual o motivo do contato?</option>
                            <option value="1">Reclamação</option>
                            <option value="2">Dúvida</option>
                            <option value="3">Elogio</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" id="btn_contact">Enviar</button>
                </form>