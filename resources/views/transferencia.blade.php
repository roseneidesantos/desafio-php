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
    @else
    <h3>Saldo Atual: 0,00 </h3>
    @endif

    
<h5 class="card-title">Transferir para:</h5>
<form method="POST" action="controllers/transferenciasController.php">
<div class="row mb-3">
<input id="comum" type="radio" name="comum">

    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>
        <div class="col-md-6">
            <input id="cpf" type="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required placeholder="Apenas números">
                @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
  </form>
</div>

<div class="row mb-3">
    <input id="comum" type="radio" name="comum">

    <label for="cnpj" class="col-md-4 col-form-label text-md-end">{{ __('CNPJ') }}</label>
        <div class="col-md-6">
            <input id="cnpj" type="cpf" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required placeholder="Apenas números">
                @error('cnpj')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<div class="row mb-3">
    <label for="valor" class="col-md-4 col-form-label text-md-end">{{ __('VALOR') }}</label>
        <div class="col-md-6">
            <input id="cnpj" type="valor" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor') }}" required placeholder="R$">
                @error('valor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Transferir') }}
            </button>
        </div>
    </div>
</div>
</div>
@endsection
