@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="h2 mb-4">Cadastrar usuário</h1>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <x-form.input name="name" label="Nome" :value="old('name')" required />
                <x-form.input name="email" label="E-mail" type="email" :value="old('email')" required />
                <x-form.input name="password" label="Senha" type="password" required />

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
@endsection
