@extends('layouts.content')
@section('title', __('projects.title'));
@section('body')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!

@endsection
