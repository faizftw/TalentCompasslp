@extends('layouts.app')

@section('title', 'Talent Compass — Temukan Potensi Diri Melalui Sidik Jari')

@section('content')
    @include('components.navbar')
    @include('components.hero')
    @include('components.about')
    @include('components.how-it-works')
    @include('components.benefits')
    @include('components.cta')
    @include('components.footer')
@endsection
