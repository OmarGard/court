@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="container">
                    <a href="{{ route('tournaments') }}" class="btn btn-primary">Tournaments</a>
                    </div>
                    You are logged in!
                    <br>
                    <a href="{{ route('tournaments.index') }}" class="btn btn-info" >Gestionar Torneos</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
