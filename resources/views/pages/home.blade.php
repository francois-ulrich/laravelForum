@extends('index')

@section('content')
    @component("partials.heading")
    Welcome
    @endcomponent

    @include('partials.nav')
@endsection