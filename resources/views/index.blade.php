@extends('layouts.html_stucture')

@section('title')
    Home
@endsection

@section('content')
    <h2>Hello</h2>
    <a href="{{ route("user.logout")  }}">
        <button>Log out</button>
    </a>
@endsection
