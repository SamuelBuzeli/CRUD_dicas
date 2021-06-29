@extends('layout.admin')

@section('title', 'Dicas | Admin')
    
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


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Criar Nova Dica</b></h4>
                    <p class="text-muted font-14 m-b-30">
                        Formulário para {{ isset($dica) ? "edição de uma Dica" : "criação de nova Dica" }} . 
                    </p>

                    <form id="form-dica" method="POST" action=" {{ isset($dica) ? route("admin.dica.update", $dica->id) : route("admin.dica.store")}} " enctype="multipart/form-data">
                        
                        @csrf
                        @isset($dica)
                            @method("PUT")
                        @else
                            @method("post")
                        @endisset

                        @component('admin.dica.form', [ "dica" => isset($dica) ? $dica : null ])
                        @endcomponent

                    </form>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" form="form-dica" class="btn btn-success mr-2">Salvar</button>
                        <a href=" {{ route('admin.dica.index') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection

@section('style')

@endsection