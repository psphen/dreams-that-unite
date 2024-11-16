@extends('frontend.layouts.app')
@section('title', __('Servicios'))
@section('content')
    <div class="container-xxl flex-grow-1">
        @livewire('frontend.pedido')
    </div>
@endsection
