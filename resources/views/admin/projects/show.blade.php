@extends('layouts.admin')

@section('content')
<header class="py-3 bg-dark text-white">
    <div class="container">
        <h1>{{$project->title}}</h1>
    </div>

    <div class="container">
        <img src="{{$project->cover_image}}" alt="">
        <p>{{$project->content}}</p>
    </div>
    @endsection