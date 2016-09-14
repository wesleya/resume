@extends('layout')

@section('content')
    <div class="container">
        @include('chefsteps.header')

        @include('chefsteps.form')

        @include('chefsteps.results')
    </div>
@endsection
