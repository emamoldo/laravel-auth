@extends('layouts.admin')

@section('content')

<header class="py-5 bg-dark text-white">
    <div class="container">
        <h1>My Projects:</h1>
    </div>
</header>

<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="col">Id</th>
                    <th class="col">Image</th>
                    <th class="col">Title</th>
                    <th class="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>
                            <img width="150" src="{{$project->cover_image}}" alt="">
                        </td>
                        <td>{{$project->title}}</td>
                        <td>view|edit|delete</td>
                    </tr>

                @empty

                @endforelse

            </tbody>
        </table>
    </div>

</div>

@endsection