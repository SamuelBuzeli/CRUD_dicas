@extends('layout.admin')

@section('title', 'Dicas | admin')

@section('style')

    <!-- DataTables -->
    <link href="{{ asset('assets/sistema/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/sistema/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable -->
    <link href="{{ asset('assets/sistema/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dicas</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        @include('components.alerts')
        
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <div style="display: flex;justify-content: space-between" class="card-header py-2 mb-3">
                        <h6 class="mt-3 font-weight-bold text-grey">Listagem de Dicas</h6>
                        <a href=" {{ route('admin.dica.create') }} " class="btn btn-primary my-2">Nova Dica</a>
                    </div>

                    <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Autor</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Versão</th>
                                <th>Criado em</th>
                                <th>Ações</th>



                            </tr>
                        </thead>

                        <tbody>
                            @foreach($dicas as $dica)
                                @if($dica->user_send_id == Auth::id())
                                    <tr>
                                        @foreach($users as $user)
                                            @if($dica->user_send_id == $user->id)
                                                <td>{{ $user->name }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $dica->type }}</td>
                                        <td>{{ $dica->brand }}</td>
                                        <td>{{ $dica->model }}</td>
                                        @if(isset($dica->version))
                                        <td>{{ $dica->version }}</td>
                                        @else
                                        <td>Não informado</td>
                                        @endif


                                        <td>{{ $dica->created_at_format }}
                                        <td>
                                            <!-- botao detalhes -->
                                            <button type="button" title="Detalhes da dica" class="btn btn-primary" data-toggle="modal" data-target="#modal-detalhes" data-id="{{ $dica->id }}"><i class="dripicons-italic"></i></button>
                                            <!-- botao editar -->
                                            <a type="button" title="Editar Dica" class="btn btn-warning" href="{{ route('admin.dica.edit', $dica->id ) }}"><i class="dripicons-pencil"></i></a>
                                            <!-- Botao apagar -->
                                            <button type="button" title="Apagar Dica" class="btn btn-danger" data-toggle="modal" data-target="#modal-excluir"  data-id="{{ $dica->id }}"><i class="dripicons-trash"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- Modal Detalhes -->
        <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes da Dica</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="author">Autor</label>
                                <input type="text" id="detalhes-author" name="detalhes-author" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="type">Tipo</label>
                                <input type="text" id="detalhes-type" name="detalhes-type" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="brand">Marca</label>
                                <input type="text" id="detalhes-brand" name="detalhes-brand" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="model">Modelo</label>
                                <input type="text" id="detalhes-model" name="detalhes-model" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="version">Versão</label>
                                <input type="text" id="detalhes-version" name="detalhes-version" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <label for="tip">Dica</label>
                                <textarea id="detalhes-tip" name="detalhes-tip" class="form-control" readonly></textarea>
                            </div>

                        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal excluir -->
        <div id="modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-12 text-dark" id="exampleModalLabel">Confirmação</h5>
                    </div>
                    <div class="modal-body" align="center">Tem certeza de que quer excluir essa Dica?</div>
                    <div class="modal-footer">
                        <form id="form-excluir" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')

                            <button type="submit" form="form-excluir" class="btn btn-danger">Excluir</button>
                        </form>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ asset('assets/sistema/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/sistema/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/datatables/buttons.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/sistema/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.datatable').DataTable({
                "language": {
                    "sProcessing": "Aguarde enquanto os dados são carregados ...",
                    "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                    "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                    "sInfoFiltered": "",
                    "sSearch": "Procurar",
                    "oPaginate": {
                    "sFirst":    "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext":     "Próximo",
                    "sLast":     "Último"
                    }
                }
            });

            /* js para abrir Modal de Detalhes de forma dinâmica com as informações desejadas */
            $('#modal-detalhes').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                let modal = $(this)

                const id = button.data('id')
                const url = 'dica/' + id

                $.getJSON(url,(resposta) => {
                    
                    $("#detalhes-author").val(resposta[1].name);
                    $("#detalhes-type").val(resposta[0].type);
                    $("#detalhes-brand").val(resposta[0].brand);
                    $("#detalhes-model").val(resposta[0].model);
                    $("#detalhes-tip").val(resposta[0].tip);


                    if(resposta[0].version){
                        $("#detalhes-version").val(resposta[0].version);
                    }else{
                        $("#detalhes-version").val("Não informado");
                    }

                });
            })

            /* js para abrir Modal de excluir de forma dinâmica */
            $('#modal-excluir').on('show.bs.modal', function (event) {
                
                var button = $(event.relatedTarget)
                const id = button.data('id')
                $('#form-excluir').attr('action','dica/'+ id)
                
            })
        });
    </script>

@endsection