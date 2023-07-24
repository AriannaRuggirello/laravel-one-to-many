@extends('layouts.app')

@section('content')
    <div class="container p-5">

        <h1>
            &#128193; {{ $projects->title }}
        </h1>

        <h6> {{ $projects->publish_date }}</h6>

        <p>
            {{ $projects->description }}
        </p>




        @foreach ($projects->type as $type)
            <span class="text-danger">
                {{ $type->type_name }}
            </span>
        @endforeach

    </div>
@endsection
