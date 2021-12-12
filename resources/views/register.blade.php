@extends('layouts.html_stucture')

@section('title')
    Register user
@endsection

@section('links')
    <link rel="stylesheet" href="/css/themes/light.css">
    <script src="/js/lc_select.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/register.css">
    <script src="/js/register.js"></script>
@endsection

@section('content')
    <main class="main">
        <div class="container">
            <section class="left-section additional-info">
                <h2 class="section__title">Как это работает?</h2>
                <div class="info-subblock"><div><img src="/images/man_laptop.svg" alt=""></div><span>Создаете аккаунт</span></div>
                <div class="info-subblock"><div><img src="/images/ninja.svg" alt=""></div><span>Ищите подходящие вам проекты и подаете в них заявкку</span></div>
                <div class="info-subblock"><div><img src="/images/lab_man.svg" alt=""></div><span>Либо создаете свой проект и приглашаете людей</span></div>
            </section>
            <div class="section__form">
                <form action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <div class="step_block page slide-page">@include('includes.register.reg_step_1')</div>
                    <div class="step_block page">@include('includes.register.reg_step_2')</div>
                    <div class="step_block page">@include('includes.register.reg_step_3')</div>
                    <div class="step_block page">@include('includes.register.reg_step_4')</div>
                </form>
            </div>
        </div>
    </main>

@endsection
