@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="h2 mb-4">Editar usuário</h1>

            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <x-form.input name="name" label="Nome" :value="old('name', $user->name)" required />
                <x-form.input name="email" label="E-mail" type="email" :value="old('email', $user->email)" required />
                <x-form.input name="password" label="Nova senha (deixe em branco para manter a atual)" type="password" />

                <button type="submit" class="btn btn-success">Atualizar</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
@endsection
