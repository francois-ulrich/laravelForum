@extends('index')

@section('content')
    @component("partials.heading")
        Home
    @endcomponent

    <p>
        Welcome!
    </p>

    @include('partials.nav')
@endsection