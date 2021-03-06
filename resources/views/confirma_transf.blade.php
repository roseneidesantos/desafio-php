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
                        <div class="col-md-6">
                        <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('Valor') }}</label>
                            <input id="valor" type="valor" class="form-control @error('valor') is-invalid @enderror" name="valor" required autocomplete="valor" placeholder="R$">
                                @error('valor')
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
                                   <a href="http://localhost:8000/transferencias" >Voltar</a>
                                </button>

                                <button type="submit" class="btn btn-primary">
                                   Confirmar
                                </button>
                            </div>
                        </div>
        </tbody>
    </div>
</div>
@endsection
