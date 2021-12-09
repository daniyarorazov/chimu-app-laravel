@extends('layouts.html_stucture')

@section('title')
    Home
@endsection

@section('links')
    <link rel="stylesheet" href="/css/themes/light.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="/js/lc_select.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection

@section('content')
    <h2>Test</h2>
    @foreach($tags as $tag)
        <span>{{$tag->name_tag}}</span> <br>
    @endforeach
    <hr>
    @foreach($users as $user)
        <span>{{$user->name}}</span> <br>
    @endforeach

    <select name="skill_tags[]" data-placeholder="Choose items" multiple>
        @foreach($tags as $tag)
            <option value="{{ $tag->name_tag }}">{{ $tag->name_tag }}</option>
        @endforeach
    </select>

    <select name="work_activity_tags[]" data-placeholder="Choose items" multiple>
        @foreach($users as $user)
            <option value="{{ $user->name }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <script type="text/javascript">
        new lc_select('select[name="skill_tags[]"]', {
            wrap_width : '100%',
            enable_search : false,

        });

        new lc_select('select[name="work_activity_tags[]"]', {
            wrap_width : '100%',
            enable_search : false,

        });
    </script>
@endsection


