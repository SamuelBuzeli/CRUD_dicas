<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

       <!-- App css -->
       <link href="{{ asset('assets/sistema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/sistema/css/icons.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/sistema/css/style.css') }}" rel="stylesheet" type="text/css" />
       
       <script src="{{ asset('assets/sistema/js/modernizr.min.js') }}"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="" class="text-success">
                                                <img src="../../../assets/site/img/SUPERA.svg" alt="" height="50">
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">Cadastro de Usuários</h6>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" id="form-cadastro" action="{{ route('admin.cadastro.store') }}" method="post">
                                            @csrf

                                            @method("post")
                               
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="name">Nome</label>
                                                    <input class="form-control" type="text" id="name" name="name" required="" placeholder="Digite seu nome">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" type="email" id="email" name="email" required="" placeholder="Digite seu email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Senha</label>
                                                    <input class="form-control" type="password" id="password" name="password" required="" placeholder="Digite sua senha">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" form="form-cadastro" type="submit">Cadastre-se</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


         <!-- jQuery  -->
         <script src="{{ asset('assets/sistema/js/jquery.min.js') }}"></script>
         <script src="{{ asset('assets/sistema/js/popper.min.js') }}"></script>
         <script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}"></script>
         <script src="{{ asset('assets/sistema/js/waves.js') }}"></script>
         <script src="{{ asset('assets/sistema/js/jquery.slimscroll.js') }}"></script>
 
         <!-- App js -->
         <script src="{{ asset('assets/sistema/js/jquery.core.js') }}"></script>
         <script src="{{ asset('assets/sistema/js/jquery.app.js') }}"></script>

    </body>
</html>