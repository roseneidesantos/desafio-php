@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                  
                </div>
            </div>
        </div>
        
    </div>
    <h1>Sistema de Transferência</h1>
<h3>Seu saldo é de:</h3>
<h3><a href="#">Transferir</a></h3>
</div>
@endsection
