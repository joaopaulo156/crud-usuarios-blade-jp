@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="h2 mb-4">Detalhes do usuário</h1>

            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>E-mail:</strong> {{ $user->email }}</p>

            <p>
                <strong>Situação do e-mail:</strong>
                @if ($user->email_verified_at)
                    <span class="badge bg-success">Verificado</span>
                @else
                    <span class="badge bg-secondary">Não verificado</span>
                @endif
            </p>

            <p><strong>Cadastrado em:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>

            <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
@endsection
