@extends('index')

@section('content')
    @component("partials.heading")
        {{ $page_title }}
    @endcomponent

    @include('partials.nav')
@endsection