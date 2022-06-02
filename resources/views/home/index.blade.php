@php $lang=app()->getLocale(); $page='home';  @endphp
@extends('layouts.master')

@section('page_title')
    Home
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    @include('home.banner')
@endsection