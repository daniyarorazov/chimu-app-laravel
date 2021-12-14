@extends('layouts.html_stucture')

@section('title')
    Search Users
@endsection

@section('links')
    <link rel="stylesheet" href="/css/themes/light.css">
    <script src="/js/lc_select.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('content')
    <form action="{{route("user.search-users")}}">
        <input type="search" name="search" class="form-control" style="width: 300px;">
        <select name="filter_value[]" data-placeholder="Choose items" multiple>
            @foreach($tags as $tag)
                <option value="{{$tag->name_tag}}">{{$tag->name_tag}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    <section class="section section__list">
        @foreach($data as $user)
            <div class="section__block">
                <h2 class="section__name">{{$user->name}}</h2>
                <div class="section__tags">
                    @foreach(explode(", ", $user->skills_tag) as $tag)
                        <span>{{$tag}}</span>
                    @endforeach
                </div>
                <a href="#">
                    <button class="section__button">Посмотреть</button>
                </a>
                <a href="#">
                    <button class="section__button section__button_transparent">Пригласить в проект</button>
                </a>
            </div>
        @endforeach
    </section>
    <script>
        new lc_select('select[name="filter_value[]"]', {
            wrap_width : '100%',
            enable_search : true,
            max_opts : 4,
        });
    </script>
@endsection
