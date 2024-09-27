@extends('partials.layout')

@section('title', 'Home')

@section('main')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.sister_companies')
    @include('sections.vision')
    @include('sections.mission')
    @include('sections.values')
    @include('sections.culture')
    @include('sections.services')
    @include('sections.organizational_structure')
    @include('sections.team')
    @include('sections.clients')
    {{-- @include('sections.call_to_action')
    @include('sections.portfolio')
    @include('sections.stats')
    @include('sections.testimonials')
    @include('sections.contact') --}}
@endsection
