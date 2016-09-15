@extends('layout')

@section('content')
    <div class="container" id="chefSteps">
        @include('chefsteps.header')

        @include('chefsteps.form')

        @include('chefsteps.results')
    </div>
@endsection
