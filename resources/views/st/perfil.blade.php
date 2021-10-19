@extends('layouts.pages.dashboard')

@section('content-page')
<div class="content-page">
   <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card my-4 shadow-lg rounded">
                    <div class="card-body">
                        <h5>Nome</h5>
                        <h5>E-mail</h5>
                        <h5>Função</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card my-4 shadow-lg rounded">
                    <div class="card-body py-4 px-5">
                        <h5 class="card-title">Perfil</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Edite seu perfil</h6>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12 my-1">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" aria-describedby="nome">
                                </div>
                                <div class="col-12 my-1">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email">
                                </div>
                                <div class="col-12 my-1">
                                    <label for="funcao">Função</label>
                                    <input type="text" class="form-control" id="funcao" aria-describedby="funcao">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
                        </form>
                    </div>
                </div>

                <div class="card my-4 shadow-lg rounded">
                    <div class="card-body py-4 px-5">
                        <h5 class="card-title">Senha</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Altere sua senha se preferir</h6>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12 my-1">
                                    <label for="senhaatual">Senha Atual</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" name="show_password" aria-hidden="true" for="password"><i id="icon_password1" class="fa fa-eye-slash"></i></span>
                                        </div>
                                        <input required="required" type="password" name="senhaatual" id="senhaatual" class="form-control password-control" />  
                                    </div> 
                                </div>
                                <div class="col-12 my-1">
                                    <label for="novasenha">Nova Senha</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" name="show_password" aria-hidden="true" for="password"><i id="icon_password2" class="fa fa-eye-slash"></i></span>
                                        </div>
                                        <input required="required" type="password" name="senhanova" id="senhanova" class="form-control password-control" />  
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Atualizar Senha</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush