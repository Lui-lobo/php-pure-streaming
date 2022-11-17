<div class="multi-step-container">
    <form id="multi-step-customer-form" data-multi-step>

        <div class="card-wrapper">
            <div class="card" data-step>

                <label class="form-label">
                    <span>Nome Completo</span>
                    <input type="text" name="nomeCliente" id="nomeCliente" class="input">
                </label>

                <label class="form-label">
                    <span>Como prefere ser chamado ?</span>
                    <input type="text" name="nomePreferencia" id="nomePreferencia" class="input">
                </label>

                <label class="form-label">
                    <span>Escolha um nome para seu Usuario</span>
                    <input type="text" name="nomeUser" id="nomeUser" class="input">
                </label>

                <label class="form-label">
                    <span>Digite um número para contato <small>(Opcional)</small></span>
                    <input type="text" name="nomeUser" id="nomeUser" class="input">
                </label>
               
                <div class="nxt-span">
                    <button type="button" class="nxt-btn" data-next><a data-next>Proximo</a>
                        <span class="material-symbols-outlined" data-next>arrow_forward_ios</span>
                    </button>
                </div>

            </div>
           
            <div class="card" data-step>
                
                <label class="form-label">
                    <span>Digite seu CEP</span>
                    <input type="text" name="cepCliente" id="cepCliente" class="input">
                </label>

                <label class="form-label">
                    <span>Endereço</span>
                    <input type="text" name="enderecoCliente" id="enderecoCliente" class="input">
                </label>

                <label class="form-label">
                    <span>Bairro</span>
                    <input type="text" name="bairroCliente" id="bairroCliente" class="input">
                </label>

                <label class="form-label">
                    <span>Logradouro</span>
                    <input type="text" name="logradouroCliente" id="logradouroCliente" class="input">
                </label>

                <label class="form-label">
                    <span>Número Logradouro</span>
                    <input type="text" name="numeroLogadrouroCliente" id="numeroLogradouroCliente" class="input">
                </label>

                
                <div class="btn-prev-next">
                    <button type="button" class="prev-btn" data-previous>
                        <span class="material-symbols-outlined" data-previous>arrow_back_ios</span>
                        <a data-previous>Voltar</a>
                    </button>
                
               
                    <button type="button" class="nxt-btn" data-next><a data-next>Proximo</a>
                        <span class="material-symbols-outlined" data-next>arrow_forward_ios</span>
                    </button>
                </div>

            </div>

            <div class="card" data-step>
                <label class="form-label" for="planoCliente">
                    Plano
                    <select type="text" name="planoCliente" id="planoCliente" class="input">
                        <option value="plano-1">Plano 1</option>
                        <option value="plano-2">Plano 2</option>
                        <option value="plano-3">Plano 3</option>
                    </select>
                </label>

                <label class="form-label" for="formaDePagamentoCliente">
                    Forma de Pagamento
                    <select type="text" name="formaDePagamentoCliente" id="formaDePagamentoCliente" class="input">
                        <option value="debito-em-conta" id="debitoEmConta">Debito Automático</option>
                        <option value="cartao-de-credito" id="cartaoDeCredito">Cartão de Credito</option>
                    </select>
                </label>

                <div class="form-debito-em-conta">
                    <label class="form-label">
                        <span>Banco Provedor</span>
                        <input type="text" name="formaDePagamentoCliente" id="formaDePagamentoCliente" class="input">
                    </label>

                    <label class="form-label">
                        <span>Número da conta</span>
                        <input type="text" name="formaDePagamentoCliente" id="formaDePagamentoCliente" class="input">
                    </label>

                    <label class="form-label">
                        <span>Agência</span>
                        <input type="text" name="formaDePagamentoCliente" id="formaDePagamentoCliente" class="input">
                    </label>
                </div>

                <div class="btn-prev-next">
                    <button type="button" class="prev-btn" data-previous>
                        <span class="material-symbols-outlined" data-previous>arrow_back_ios</span>
                        <a data-previous>Voltar</a>
                    </button>
                
                    <button type="button" class="nxt-btn" data-next><a data-next>Proximo</a>
                        <span class="material-symbols-outlined" data-next>arrow_forward_ios</span>
                    </button>
                </div>
            </div>

            <div class="card" data-step>

                <label class="form-label">
                    <span>Qual seu genero favorito ?</span>
                    <input type="text" name="formaDePagamentoCliente" id="formaDePagamentoCliente" class="input">
                </label>

                <div class="btn-prev-next">
                    <button type="button" class="prev-btn" data-previous>
                        <span class="material-symbols-outlined" data-previous>arrow_back_ios</span>
                        <a data-previous>Voltar</a>
                    </button>
                
                    <button type="submit" class="form-button">Concluir Cadastro</button>
                </div>
                
            </div>
        </div>

    </form>
</div>