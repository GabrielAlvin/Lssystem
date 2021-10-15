@extends('layouts.pages.dashboard')

@section('content-page')
<div class="content-page">
   <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card m-5">
                    <div class="card-body py-5">
                        <form>
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
                            <button type="submit" class="btn btn-primary mt-1">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card m-5">
                    <div class="card-body py-5">
                        <form>
                            <div class="row">
                                <div class="col-12 my-1">
                                    <label for="senhaatual">Senha Atual</label>
                                    <input type="password" class="form-control" id="senhaatual" aria-describedby="senhaatual">
                                </div>
                                <div class="col-12 my-1">
                                    <label for="novasenha">Nova Senha</label>
                                    <input type="password" class="form-control" id="novasenha" aria-describedby="novasenha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Atualizar Senha</button>
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