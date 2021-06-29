@extends('layout.site')

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
                    </div>

                    <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Autor</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Versão</th>
                                <th>Dica</th>
                                <th>Criado em</th>
                                



                            </tr>
                        </thead>

                        <tbody>
                            @foreach($dicas as $dica)
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
                                <td>{{ $dica->tip }}</td>
                                



                                <td>{{ $dica->created_at_format }}
                                <td>

                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->

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



@endsection