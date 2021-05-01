@extends('layouts.index')

@section('content')
    @include('template.header')
    <main id="main">
        @include('template.about')
        @include('template.facts')
        @include('template.skills')
        @include('template.portfolio')
        @include('template.services')
        @include('template.contact')
    </main>

    @include('template.footer')
@endsection