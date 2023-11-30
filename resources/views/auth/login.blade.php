@extends('layouts.app')

@section('content')
<div class="container card">
    <div class="row py-5 mt-4 align-items-center ">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="assets/loginimg.svg" alt="" class="img-fluid mb-3 d-none d-md-block">

        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto ">
            <h1>Faça login</h1>
            <form action="#">
                <div class="row">
                    
                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="bi bi-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md">
                    </div>


                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="bi bi-key"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Senha" class="form-control bg-white border-left-0 border-md">
                    </div>



                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">LOGIN</span>
                        </a>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Não possui uma conta? <a href="/register" class="text-primary ml-2">Registre-se!</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
