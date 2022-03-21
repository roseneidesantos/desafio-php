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
        <h3>Saldo Atual:</h3>
        <h2> R$ {{ Auth::user()->carteira}} </h2> 
        <h5 class="card-title">Transferir para:</h5>
        <tbody>
            @foreach($data as $n)
            <tr>
            <td><h2>{{ $n->name }}</h2></td>
            </tr>
            @endforeach
                <div class="row mb-3">
                    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('Valor') }}</label>
                        <div class="col-md-6">
                            <input id="cpf" type="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('Data') }}</label>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar') }}
                                </button>
                            </div>
                        </div>
        </tbody>
    </div>
</div>
@endsection
