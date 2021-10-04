@extends('layouts.pages.painel')

@section('content-page')
{{-- Painel de produtos --}}
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <a href="{{ route('index_sistemateste')}}" class="card-product-panel">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 p-4 bg-primary img-panel-product py-5 text-center">
                                <i class="fas fa-paperclip icon-panel-menu text-white icon-panel-menu"></i>
                            </div>
                            <div class="col-6 p-4">
                                <h2>ST</h2>
                                <p class="card-text">Sistema de Teste</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-4 bg-secondary img-panel-product py-5 text-center">
                            <i class="fas fa-clipboard-list icon-panel-menu text-white icon-panel-menu"></i>
                        </div>
                        <div class="col-6 p-4 d-flex flex-column bd-highlight">
                            <h2>SGPS</h2>
                            <p class="card-text">Sistema para Gestão de Pesquisa de Satisfação</p>
                            <div class="mt-auto"> 
                                <button type="button" class="btn btn-success btn-sm ">Adquira agora <i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-4 bg-secondary img-panel-product py-5 text-center">
                            <i class="fas fa-address-card icon-panel-menu text-white icon-panel-menu"></i>
                        </div>
                        <div class="col-6 p-4 d-flex flex-column bd-highlight">
                            <h2>SC</h2>
                            <p class="card-text">Sistema Confia</p>
                            <div class="mt-auto"> 
                                <button type="button" class="btn btn-success btn-sm ">Adquira agora <i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-4 bg-secondary img-panel-product py-5 text-center">
                            <i class="fas fa-chart-line icon-panel-menu text-white icon-panel-menu"></i>
                        </div>
                        <div class="col-6 p-4 d-flex flex-column bd-highlight">
                            <h2>SG</h2>
                            <p class="card-text">Sistema Gestão</p>
                            <div class="mt-auto"> 
                                <button type="button" class="btn btn-success btn-sm ">Adquira agora <i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-4 bg-secondary img-panel-product py-5 text-center">
                            <i class="fab fa-buffer icon-panel-menu text-white icon-panel-menu"></i>
                        </div>
                        <div class="col-6 p-4 d-flex flex-column bd-highlight">
                            <h2>SBI</h2>
                            <p class="card-text">Sistema B.I</p>
                            <div class="mt-auto"> 
                                <button type="button" class="btn btn-success btn-sm ">Adquira agora <i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card card-panel-product shadow-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-4 bg-secondary img-panel-product py-5 text-center">
                            <i class="fas fa-file-alt icon-panel-menu text-white icon-panel-menu"></i>
                        </div>
                        <div class="col-6 p-4 d-flex flex-column bd-highlight">
                            <h2>SD</h2>
                            <p class="card-text">Sistema de Documentos</p>
                            <div class="mt-auto"> 
                                <button type="button" class="btn btn-success btn-sm ">Adquira agora <i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Fim do Painel de produtos --}}
@endsection
