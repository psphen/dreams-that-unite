@extends('frontend.layouts.app')
@section('title', __('Home'))
@section('content')
    @include('frontend.partials.slider')
    {{-- @include('frontend.partials.alphabet') --}}
    @include('frontend.partials.type')
    @include('frontend.partials.testimonials')
    @include('frontend.partials.data')
    {{-- @include('frontend.partials.service')
    @livewire('frontend.contact-people') --}}
    {{--@include('frontend.partials.contact')--}}
    {{--@include('frontend.partials.about-me')--}}
    {{--@include('frontend.partials.line')--}}
@endsection
