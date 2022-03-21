@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                  
                </div>
            </div>
        </div>
    </div>

    <div id="transf">
         <h1>Sistema de Transferência</h1>
        @if(Auth::user()->carteira > 0)
          <h3>Saldo Atual:</h3>
          <h2> R$ {{ Auth::user()->carteira }} </h2>
          <h3><a href="http://localhost:8000/transferencias">Fazer uma transferência</a></h3>
        @else
          <h3>Saldo Atual: 0,00 </h3>
          <h3>Não há saldo para realizar transferências</h3>
        @endif
    </div>


</div>
@endsection
