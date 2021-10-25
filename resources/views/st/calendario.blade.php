@extends('layouts.pages.dashboard')

@section('content-page')
<div class="content-page mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">  
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 bold">Escala de Funcionarios</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-gold" data-toggle="modal" data-target="#staticBackdrop">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
  
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="addusuesca-tab" data-toggle="tab" href="#addusuesca" role="tab" aria-controls="addusuesca" aria-selected="true">Adicionar Usuario a escala</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="addusu-tab" data-toggle="tab" href="#addusu" role="tab" aria-controls="addusu" aria-selected="false">Adicionar Usuario</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active px-3 mt-2" id="addusuesca" role="tabpanel" aria-labelledby="addusuesca-tab">
                                        Teste1
                                    </div>
                                    <div class="tab-pane fade px-3 mt-2" id="addusu" role="tabpanel" aria-labelledby="addusu-tab">
                                        Teste2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion mt-4" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Gabriel
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">01 / 10 / 2021</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">05 / 10 / 2021</span>
                                </li>
                              </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Guilherme
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">05 / 10 / 2021</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">09 / 10 / 2021</span>
                                </li>
                              </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Djalma
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">05 / 10 / 2021</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipe de UTI
                                    <span class="badge badge-primary badge-pill">20 / 10 / 2021</span>
                                </li>
                              </ul>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-8 mt-4">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        contentHeight: 500,
        locale: 'pt-br',
        events: [
        {
        title  : 'Gabriel',
        start  : '2021-10-01T17:30:00'
        },
        {
        title  : 'Djalma',
        start  : '2021-10-05T10:50:00'
        },
        {
        title  : 'Gabriel',
        start  : '2021-10-05T19:50:00'
        },
        {
        title  : 'Djalma',
        start  : '2021-10-20T10:50:00'
        },
        {
        title  : 'Guilherme',
        start  : '2021-10-05T11:50:00'
        },
        {
        title  : 'Guilherme',
        start  : '2021-10-09T12:30:00'
        }]
    });

    calendar.render();
    });
</script>
@endpush