@extends('layouts.html_stucture')

@section('title')
    Login
@endsection

@section('content')
    <h2>Вход</h2>
    <form action="{{ route('user.login')  }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" name="submit" value="1">Войти</button>
        </div>
    </form>
@endsection
