@extends('layouts.pages.dashboard')

@section('content-page')
<div class="content-page p-5">
    <h2>Tabela</h2>
    <div class="card">
        <div class="card-body">
            <div id="toolbar">
                <button class="btn btn-secondary" data-toggle="modal" data-target="#novalinha"><i class="fas fa-plus"></i> Adicionar nova linha</button>    
                    
                <div class="modal fade" id="novalinha" tabindex="-1" aria-labelledby="novalinha" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adicionar nova linha</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="addLinha">
                                @csrf
                                <div class="modal-body" class="my-2">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome">

                                    <label for="nome" class="my-2">Hospital</label>
                                    <input type="text" class="form-control" id="hospital" name="hospital">

                                    <label for="nome" class="my-2">Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary" >Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table
            id="my_table_id"
            class="text-center"
            data-toggle="table"
            data-editable="true"
            data-editable-pk="id"
            data-editable-mode="inline"
            data-editable-type="text"
            data-locale="pt-BR"
            data-search="true"
            data-show-columns="true"
            data-show-export="true"
            data-click-to-select="true"
            data-toolbar="#toolbar"
            data-unique-id="id"
            data-id-field="id"
            data-page-size="5"
            data-page-list="[5, 10, 25, 50, 100, all]"
            data-pagination="true"
            data-search-accent-neutralise="true"
            data-editable-url="{{ route('edit_sistemateste') }}"
            data-url="{{ route('show_sistemateste') }}">
                <thead>
                    <tr>
                        <th data-field="id" class="col-1">ID</th>
                        <th data-field="nome" data-editable="true" class="col-3" aria-required="true">NOME</th>
                        <th data-field="hospital" data-editable="true" class="col-4" aria-required="true">HOSPITAL</th>
                        <th data-field="valor" data-editable="true" class="col-3" aria-required="true">VALOR</th>
                        <th data-field="acao" class="col-1" data-formatter="acaoFormatter" data-events="acaoEvents">A????o</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
//Ajax TOKEN
$.ajaxSetup({
	headers: {
	    'X-CSRF-TOKEN': '{{csrf_token()}}'
	}
});

//Adicionar uma nova linha e lan??ar via ajax
$(document).ready(function () {
    $("#addLinha").submit(function(event){
        event.preventDefault();

        $.ajax({
            url: "{{ route('create_sistemateste') }}",
            type: "POST",
            data: $(this).serialize(),
            dataType:"json",
            success: function(response) {
                if(response.success === true){
                    $('#novalinha').modal('hide');
                    $('#my_table_id').bootstrapTable('append', response.dados);
                }else{
                    alert('erro');
                }
            }
        });
    });
});

//Excluir uma nova linha
window.acaoEvents = {
    'click .remove': function (e, value, row) {
        $('#my_table_id').bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      });
    }
}

//Criar colunar a????o
function acaoFormatter(value, row, index) {
    return [
      '<a class="remove" href="javascript:void(0)" title="Remove">',
      '<i class="fa fa-trash"></i>',
      '</a>'
    ].join('');
}
</script>
@endpush