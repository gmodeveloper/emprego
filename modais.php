    <!-- Modal Cadastro Curriculo -->
    <div class="modal fade" id="cadCurriculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-azulEscuro p-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="branco far fa-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title azulEscuro f-title-150" id="exampleModalLabel">Vamos começar o cadastro?</h5>
                    <br>
                    <form action="./cadCurriculo.php" method="post" name="cadCurriculo">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome completo*" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="telefone" class="form-control tell" placeholder="Telefone*" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="senha" class="form-control" placeholder="Senha*" requided>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn bg-azulEscuro branco f-text-bold" value="Cadastrar" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastro Empresa -->
    <div class="modal fade" id="cadEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-azulClaro p-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="branco far fa-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title azulClaro f-title-150" id="exampleModalLabel">Vamos cadastrar sua empresa!</h5>
                    <br>
                    <form action="./cadEmpresa.php" method="post">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome da empresa*" required />
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="area" class="form-control" placeholder="Área de Atuação*" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="telefone" class="form-control tell" placeholder="Telefone*" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="senha" class="form-control" placeholder="Senha*" required>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-roxo p-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="branco far fa-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title roxo f-title-150" id="exampleModalLabel">Vamos entrar!</h5>
                    <br>
                    <form action="./login.php" method="post">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-mail*" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="senha" class="form-control" placeholder="Senha*" required>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn bg-roxo branco f-text-bold" value="Continuar" />
                        </div>
                    </form>

                    <hr>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <h6 class="azulEscuro f-text-80 p-0">Quer fazer o cadastro do seu currículo?</h6>
                            <input type="submit" value="Cadastrar" data-dismiss="modal" aria-label="Close" class="btn bg-azulEscuro branco text-center f-text-80 pb-0" data-toggle="modal" data-target="#cadCurriculo">
                        </div>
                        <div class="col-sm-6">
                            <h6 class="azulClaro f-text-80 p-0">Quer fazer o cadastro da sua empresa?</h6>
                            <input type="submit" value="Cadastrar" data-dismiss="modal" aria-label="Close" class="btn bg-azulClaro branco text-center f-text-80 pb-0" data-toggle="modal" data-target="#cadEmpresa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>